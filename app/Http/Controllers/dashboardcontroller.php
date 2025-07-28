<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user(); // Get the logged-in user

        // Check if user has any bookings
        $hasBooked = $user->bookings()->exists();

        // Pass the result to the view
        return view('user.Dashboard', compact('hasBooked'));
    }
}
