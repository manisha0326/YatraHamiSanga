<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profileAdmin()
    {
        return view('admin.profile');
    }


    public function userDashboard()
    {
        $user = Auth::user(); 
        return view('user.Dashboard');
    }

    public function profileUser()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
       
    }

    public function availableVehicles()
    {
        $brands = Brand::all();
        $brands = Brand::with('category')
                        ->where('status', 'available')
                        ->get();

        return view('user.AvailableVehicles', compact('brands'));
    }
}
