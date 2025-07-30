<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{

    public function contactUs(Request $request){

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in to contact us.');
        }

        $validator = Validator::make($request->all(),[
            'fullname' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email',
            'contactNumber' => 'required|digits:10',
            'message' => 'required|string|max:100',
        ]);
        if ($validator->passes()){
            $contact = new Contact();
            $contact->fullname      = $request->fullname;
            $contact->email         = $request->email;
            $contact->contactNumber = $request->contactNumber;
            $contact->message       = $request->message;
            $contact->save();
            
            return redirect()->route('contactus')->with('success','Thanks for Contacting us');
        }else{
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.customerQuery', compact('contacts'));
    }
}
