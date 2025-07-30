<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingCancelled;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('frontend.pages.payment', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email',
            'phoneNumber' => 'required|digits:10',
            'vehicleType' => 'required|exists:categories,id',
            'vehicleModel' => 'required|exists:brands,id', 
            'bookingType' => 'required|in:perDay,perHour',
            'pickupDate' => 'required_if:bookingType,perDay|date|nullable',
            'returnDate' => 'required_if:bookingType,perDay|date|after_or_equal:pickupDate|nullable',
            'hour' => 'required_if:bookingType,perHour|integer|min:1|max:12|nullable',
            'amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            // dd($validator->errors()->toArray()); // Show what failed
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // Clean and prepare booking data
        $bookingData = [
            'fullname'      => $request->fullname,
            'email'         => $request->email,
            'phone'         => $request->phoneNumber,
            'vehicleType'   => $request->vehicleType,
            'vehicleModel'  => $request->vehicleModel,
            'bookingType'   => $request->bookingType,
            'pickupDate'    => $request->pickupDate,
            'returnDate'    => $request->returnDate,
            'hour'          => $request->hour,
            'amount'        => $request->amount,
        ];

        session(['booking_data' => $bookingData]);
        
        logger('Booking session data saved.', ['booking_data' => $bookingData]);

        return redirect()->route('initiate.payment');
    }

    public function getModels($category_id)
    {
        return response()->json(
            Brand::where('category_id', $category_id)->get(['id', 'brand_name'])
        );
    }

    
    public function bookingHistory()
    {
        $bookings = Booking::where('user_id', auth()->id())->with('brand')->orderBy('id','DESC')->get();
        return view('user.Bookinghistory', compact('bookings'));
    }

    

    public function showCancelPage($id)
    {
        $booking = Booking::with('brand')->findOrFail($id);
        return view('user.cancelBooking', compact('booking'));
    }

    public function cancelBooking($id)
    {
        $booking = Booking::with('brand')->findOrFail($id);
        $now = Carbon::now();
        $pickupDate = Carbon::parse($booking->pickupDate);

        if ($now->lessThan($pickupDate)) {
            $booking->status = 'cancelled';
            $booking->save();

            if ($booking->brand) {
                $booking->brand->status = 'available';
                $booking->brand->save();
            }

            Mail::to($booking->email)->send(new BookingCancelled($booking));

            return redirect()->route('user.Cancelvehicle')->with('success', 'Booking cancelled successfully.');
        }

        return back()->with('error', 'You can only cancel before the pickup date.');
    }

    public function cancelledList()
    {
        $cancelledBookings = Booking::with('brand')
            ->where('user_id', auth()->id())
            ->where('status', 'cancelled')
            ->orderBy('id','DESC')
            ->get();

        return view('user.Cancelvehicle', compact('cancelledBookings'));
    }
}
