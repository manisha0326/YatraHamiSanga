<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // public function profile()
    // {
    //     return view('user.profile'); 
    // }

    public function upload(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();

        // Delete old image if exists
        if ($user->profile_image && Storage::exists($user->profile_image)) {
            Storage::delete($user->profile_image);
        }

        // Store new image
        $path = $request->file('profile_image')->store('profile_images', 'public');
        $user->profile_image = $path;
        $user->save();

        return back()->with('success', 'Profile image updated successfully.');
    }
}
