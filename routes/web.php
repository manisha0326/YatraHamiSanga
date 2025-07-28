<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\profilecontroller;
use Illuminate\Support\Facades\Auth;






// use App\Http\Controllers\User\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/category/create', [CategoryController::class,'create'])->name('admin.category.create');

// Route::get('/login', function () {
//     return view('login');
// });


//dashboard user bitra ko haru
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});


 Route::get('/user/Dashboard', function () {
    return view('user.Dashboard');
})->name('user.dashboard');

Route::middleware('web')->group(function() {
   

Route::get('/help', [HelpController::class, 'index'])->name('user.help');

Route::get('/bookinghistory', function () {
    return view('user.Bookinghistory');
})->name('user.bookinghistory');

Route::get('/cancelvehicle', function () {
    return view('user.Cancelvehicle');
})->name('user.Cancelvehicle');

Route::get('/user/just', function () {
    return view('user.just');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/Authenication/login');
})->name('logout');

Route::get('/Dashboard/profile', [profilecontroller::class, 'profile'])->name('profile.view');

Route::get('/Authenication/login', function () {
    return view('Authenication.login');
});
});


// pages haru ko
Route::view('/', 'frontend.pages.home')->name('home');
Route::view('/aboutus','frontend.pages.aboutus')->name('aboutus');
Route::view('/contactus','frontend.pages.contactus')->name('contactus');
Route::view('/faqs', 'frontend.pages.faqs')->name('faqs');
Route::view('/payment', 'frontend.pages.payment')->name('payment');
Route::view('/terms', 'frontend.pages.terms')->name('terms');

// for the category
Route::get('/rental/{vehicle}', function ($vehicle) {
    $allowedVehicles = ['scooter', 'bike', 'car', 'scropio', 'hiace'];

    if (in_array($vehicle, $allowedVehicles)) {
        return view("frontend.Rental.$vehicle");
    }

    abort(404);
});


// rental ko routes haru ho
Route::view('/rental/bike', 'frontend.Rental.Bike')->name('Rental.Bike');
Route::view('/rental/scooter', 'frontend.Rental.Scooter')->name('Rental.Scooter');
Route::view('/rental/car', 'frontend.Rental.Car')->name('Rental.Car');
Route::view('/rental/scropio', 'frontend.Rental.Scropio')->name('Rental.Scropio');
Route::view('/rental/hiace', 'frontend.Rental.Hiace')->name('Rental.Hiace');



// For Renatl description pages

Route::get('/frontend/Rental/Descriptionpage/Bike/Apache', function () {
    return view('frontend.Rental.Descriptionpage.Bike.Apache');
})->name('Apache');

Route::get('/frontend/Rental/Descriptionpage/Bike/HeroGlamourHE', function () {
    return view('frontend.Rental.Descriptionpage.Bike.HeroGlamourHE');
})->name('HeroGlamourHE');

Route::get('/frontend/Rental/Descriptionpage/Bike/RoyalEnfield', function () {
    return view('frontend.Rental.Descriptionpage.Bike.RoyalEnfield');
})->name('RoyalEnfield');

Route::get('/frontend/Rental/Descriptionpage/Scooter/Vespa', function () {
    return view('frontend.Rental.Descriptionpage.Scooter.Vespa');
})->name('Vespa');

Route::get('/frontend/Rental/Descriptionpage/Scooter/Tvs', function () {
    return view('frontend.Rental.Descriptionpage.Scooter.Tvs');
})->name('Tvs');


 // vehicle status -->
 Route::get('/cancelBooking', function () {
    return view('user.cancelBooking');
})->name('user.cancelBooking');


