<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmation;
use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Brand;

class PaymentController extends Controller
{
    public function initiatePayment(Request $request)
{


    $bookingData = Session::get('booking_data');
    // dd($bookingData);
    if (!$bookingData) {
        return redirect()->route('payment')->with('error', 'Booking information is missing.');
    }

    $brand = Brand::findOrFail($bookingData['vehicleModel']);  // make sure keys match

    $payload = [
        'return_url' => url('/api/verify-payment'),
        'website_url' => config('payment.khalti.website_url'),
        'amount' =>100, // paisa
        'purchase_order_id' => uniqid(),
        'purchase_order_name' => $brand->brand_name,
        'customer_info' => [
            'name' => $bookingData['fullname'],
            'email' => $bookingData['email'],
            'phone' => $bookingData['phone'],
        ]
    ];

    $response = Http::withHeaders([
        'Authorization' => 'key ' . config('payment.khalti.secret_key'),
        'Accept' => 'application/json',
    ])->post(config('payment.khalti.base_url') . '/api/v2/epayment/initiate/', $payload)->throw();

    return redirect()->away($response['payment_url']);
}


    public function verifyPayment(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'key ' . config('payment.khalti.secret_key'),
            'Accept' => 'application/json',
        ])->post(config('payment.khalti.base_url') . '/api/v2/epayment/lookup/', [
            'pidx' => $request->pidx
        ])->throw();

        $data = $response->json();

        if ($data['status'] === 'Completed') {
            $bookingData = Session::get('booking_data');


            if (!$bookingData) {
                return redirect()->route('payment')->with('error', 'Session expired or invalid booking data.');
            }


            $payment = Payment::create([
                'user_id' => auth()->id() ?? null,
                'brand_id' => $bookingData['vehicleModel'],
                'payment_gateway' => 'Khalti',
                'payment_id' => $data['transaction_id'],
                'amount' => $bookingData['amount'],
                'status' => $data['status'],
            ]);

            $booking = new Booking();
            $booking->fullname      = $bookingData['fullname'];
            $booking->email         = $bookingData['email'];
            $booking->phone         = $bookingData['phone'];
            $booking->vehicleType  = $bookingData['vehicleType'];
            $booking->vehicleModel = $bookingData['vehicleModel'];
            $booking->bookingType  = $bookingData['bookingType'];
            $booking->pickupDate   = $bookingData['pickupDate'] ?? null;
            $booking->returnDate   = $bookingData['returnDate'] ?? null;
            $booking->hour          = $bookingData['hour'] ?? null;
            $booking->amount        = $bookingData['amount'];
            $booking->status        = 'booked';
            $booking->payment_id    = $payment->id;
            $booking->user_id = auth()->id();
            $booking->save();

            $brand = Brand::find($bookingData['vehicleModel']);
            if ($brand) {
                $brand->status = 'booked';
                $brand->save();
            }

            // ✅ Auto update expired bookings here
            $expiredBookings = Booking::where('status', 'booked')
                ->where('returnDate', '<', Carbon::now())
                ->get();

            foreach ($expiredBookings as $expired) {
                $brand = Brand::find($expired->vehicleModel);
                if ($brand && $brand->status === 'booked') {
                    $brand->status = 'Available';
                    $brand->save();
                }
                
            }


            Mail::to($bookingData['email'])->send(new BookingConfirmation($bookingData));

            Session::forget('booking_data');

            return view('payment.success', compact('data', 'bookingData'));
        }

        return view('payment.failed', compact('data','bookingData'));
    }
}
