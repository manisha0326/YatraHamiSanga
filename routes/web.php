<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\PaymentController;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Contact;


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
// routes/web.php



// Only for guests (unauthenticated users)
// Route::middleware('guest')->group(function () {
//     Route::get('/login', [AuthenticationController::class, 'loginAuthentication'])->name('login');
// });


// pages haru ko

Route::get('/', [HomeController::class, 'rentalPage'])->name('home');
Route::view('/aboutus','frontend.pages.aboutus')->name('aboutus');
Route::view('/contactus','frontend.pages.contactus')->name('contactus');
Route::view('/faqs', 'frontend.pages.faqs')->name('faqs');
Route::post('/profile/upload', [ProfileController::class, 'upload'])->name('profile.upload');
Route::view('/terms', 'frontend.pages.terms')->name('terms');
Route::get('/payment', [BookingController::class, 'index'])->name('payment');
Route::get('/initiate-payment', [PaymentController::class, 'initiatePayment'])->name('initiate.payment');
Route::get('/api/verify-payment', [PaymentController::class, 'verifyPayment']);
Route::get('/getModels/{category_id}', [BookingController::class, 'getModels']);

Route::view('/signup', 'frontend.Authentication.signup')->name('signup');
Route::post('/signup', [AuthenticationController::class, 'register'])->name('signup');

Route::view('/login', 'frontend.Authentication.login')->name('login');
Route::post('/login', [AuthenticationController::class, 'loginAuthentication'])->name('login');

Route::view('/forgetPassword', 'frontend.Authentication.forgetPassword')->name('forgetPassword');
Route::post('/forgetPassword', [AuthenticationController::class, 'forgetPassword'])->name('forgetPassword');

Route::get('/verifyOtp', function () {
    return view('frontend.Authentication.verifyOTP');
})->name('verifyOTPForm');
Route::post('/verifyOtp', [AuthenticationController::class, 'verifyOtp'])->name('verifyOTP');
Route::get('/resendOtp', [AuthenticationController::class, 'resendOTP'])->name('resendOTP');


Route::get('/changePassword', function () {
    return view('frontend.Authentication.changePassword');
})->name('changePassword');
Route::post('/changePassword', [AuthenticationController::class, 'changePassword'])->name('updatePassword');

Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::post('/contactus', [ContactusController::class, 'contactUs'])->name('contactus');

// rental ko routes haru ho

Route::get('/rental/description/{slug}', [RentalController::class, 'showDescription'])->name('rental.description');
Route::get('/rental-ajax', [RentalController::class, 'ajaxFilter'])->name('rental.ajax');
Route::get('/rental/{slug?}', [RentalController::class, 'index'])->name('rental.index');


// Only for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('/user/profile', [DashboardController::class, 'profileUser'])->name('user.profile');
    Route::get('/user/availableVehicles', [DashboardController::class, 'availableVehicles'])->name('user.AvailableVehicles');
    
    Route::get('/help', [HelpController::class, 'index'])->name('user.help');
    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/user/cancelBooking/{id}', [BookingController::class, 'showCancelPage'])->name('booking.cancel.page');
    Route::post('/user/cancelBooking/{id}', [BookingController::class, 'cancelBooking'])->name('booking.cancel');

    Route::get('/cancelvehicle', [BookingController::class, 'cancelledList'])->name('user.Cancelvehicle');
    Route::get('/user/bookings', [BookingController::class, 'userBookings'])->name('user.bookings');
    Route::get('/user/booking-history', [BookingController::class, 'bookingHistory'])->name('user.bookingHistory');
});


//dashboard admin bitra ko haru

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profileAdmin'])->name('profile');
    Route::get('/userDetails', [UserController::class, 'index'])->name('UserDetails');
    Route::get('/customerQuery', [ContactusController::class, 'index'])->name('customerQuery');
    Route::get('/VehicleDetails', function () {
        return view('admin.VehicleDetails');
    })->name('VehicleDetails');

    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/view', [CategoryController::class, 'viewCategory'])->name('category.view');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');



    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/view', [BrandController::class, 'viewBrand'])->name('brand.view');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'destroy'])->name('brand.delete');
    Route::get('/brands/filter', [BrandController::class, 'filter'])->name('brands.filter');
   
       
});


