<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// frontend routes
Route::get('fe_home', [FrontendController::class, 'index'])->name('fe_home');
Route::get('destinations', [FrontendController::class, 'destinations'])->name('destinations');
Route::get('destination_details/{id}', [FrontendController::class, 'destination_details'])->name('destination_details');
Route::get('packages', [FrontendController::class, 'packages'])->name('packages');
Route::get('package_details/{id}', [FrontendController::class, 'package_details'])->name('package_details');
Route::post('enquiry_email', [EnquiryController::class, 'enquiry_email'])->name('enquiry_email');


// destinations
Route::get('app/destinations', [DestinationController::class, 'index'])->name('app.destinations');
Route::get('app/destinations/create', [DestinationController::class, 'create'])->name('app.destinations.create');
Route::post('app/destinations/store', [DestinationController::class, 'store'])->name('app.destinations.store');

// packages
Route::get('app/packages', [PackageController::class, 'index'])->name('app.packages');
Route::get('app/packages/create', [PackageController::class, 'create'])->name('app.packages.create');
Route::post('app/packages/store', [PackageController::class, 'store'])->name('app.packages.store');

// itinerary
Route::get('app/itinerary', [ItineraryController::class, 'index'])->name('app.itinerary');
Route::get('app/itinerary/create', [ItineraryController::class, 'create'])->name('app.itinerary.create');
Route::post('app/itinerary/store', [ItineraryController::class, 'store'])->name('app.itinerary.store');
Route::get('app/getItineraryByDestination/{id}', [ItineraryController::class, 'getItineraryByDestination'])->name('app.getItineraryByDestination');

// as post
Route::get('app/ad', [AdController::class, 'index'])->name('app.ad');
Route::get('app/ad/create', [AdController::class, 'create'])->name('app.ad.create');
Route::post('app/ad/store', [AdController::class, 'store'])->name('app.ad.store');


Route::get('/index', function() {
    return view('pages.frontend.index');
});
Route::get('about', function() {
    return view('pages.frontend.about_us');
});
Route::get('contact', function() {
    return view('pages.frontend.contact_us');
});
Route::get('destination_list', function() {
    return view('pages.frontend.destination');
});
Route::get('package_details', function() {
    return view('pages.frontend.package_details');
});
Route::get('destination_details', function() {
    return view('pages.frontend.destination_details');
});
Route::get('dashboard', function() {
    return view('pages.backend.dashboard.dashboard');
});
Route::get('des-c', function() {
    return view('pages.backend.destinations.create');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
