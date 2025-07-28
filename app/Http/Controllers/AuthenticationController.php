<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    //signup ko function
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'fullname' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
            'gender' => 'required|in:male,female,other',
            'contact' => 'required|numeric',
            'password' => 'required|string|min:8',
            'terms' => 'accepted',
        ]);

        if ($validator->passes()){
            $user = new User();
            $user->fullname = $request->fullname;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->dob = $request->dob;
            $user->gender = $request->gender;
            $user->contact = $request->contact;
            $user->password = Hash::make($request->password);
            $user->save();


             Auth::login($user);
            // return redirect()->route('login')->with('success','You have registered successfully');
            return redirect()->route('home');

        }else{
            return redirect()->route('signup')->withInput()->withErrors($validator);
        }

        // return redirect()->route('user.dashboard');
        
    }

    //login ko function
    public function loginAuthentication(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()){

            if(Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
                return redirect()->route('home');
            }else{
                return redirect()->route('login')->with('error','Either email or password is incorrect.');
            }

        }else{
            return redirect()->route('login')->withInput()->withErrors($validator);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


    //forgetpassword ko function
    public function forgetPassword(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email'
        ]);
        $otp = rand(100000, 999999); 

        // Ssession ma otp save 
        Session::put('otp', $otp);
        Session::put('otp_email', $request->email);
       
        // send otp via email
        Mail::raw("Your OTP is: $otp", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Password Reset OTP');
        });

        return redirect()->route('verifyOTPForm')->with('success', 'OTP sent to your email.');
        
    }

    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'otp' => 'required|digits:6'
        ]);

        $enteredOtp = implode('', $request->input('otp'));
        $sessionOtp = Session::get('otp');
        $email = Session::get('otp_email');
        
        if ((int) $enteredOtp === (int) $sessionOtp) {
            // otp match paxi change passowrd ma janxa
            return redirect()->route('changePassword')->with('success', 'OTP verified. Please reset your password.');
        } else {
            return back()->with('error', 'Invalid OTP. Please try again.');
        }
    }

    public function resendOTP(Request $request)
    {
        $email = session('reset_email'); // the email stored during the forgetPassword process

        if (!$email) {
            return redirect()->route('forgetPassword')->with('error', 'Session expired. Please try again.');
        }

        $otp = rand(100000, 999999);

        // new OTP session ma store huna lai ho
       session(['otp' => $otp, 'reset_email' => $request->email]);

        // Send email
        Mail::raw("Your new OTP is: $otp", function ($message) use ($email) {
            $message->to($email)
                    ->subject('Resend OTP');
        });

        return redirect()->back()->with('success', 'A new OTP has been sent to your email.');
    }

    //changePassword ko function
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'newPassword' => 'required|string|min:8',
            'confirmPassword' => 'required|string|min:8|same:newPassword'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $email = trim(Session::get('otp_email'));

        if (!$email) {
            return redirect()->route('forgetPassword')->with('error', 'Session expired.');
        }

        $user = User::where('email', $email)->first();
        // dd(User::pluck('email'));

        if (!$user) {
            return redirect()->route('forgetPassword')->with('error', 'User not found.');
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();

        Session::forget('otp');
        Session::forget('otp_email');

        return redirect()->route('login')->with('success', 'Password changed successfully. Please login.');
    }


    
}
