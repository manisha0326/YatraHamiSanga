<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{

    

    public function contactUs(Request $request){
        $validator = Validator::make($request->all(),[
            'fullname' => 'required|string|max:255|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email',
            'contactNumber' => 'required|numeric',
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
        // return redirect()->route('forgetPassword')->withInput()->withErrors($validator);
    }

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.customerQuery', compact('contacts'));
    }
}
