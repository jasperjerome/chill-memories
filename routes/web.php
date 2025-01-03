<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Paymentcontroller;;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\web\AboutusController;
use App\Http\Controllers\web\ContactusController;
use App\Http\Controllers\web\PrivacypolicyController;
use App\Http\Controllers\web\RefundpolicyController;
use App\Http\Controllers\web\TermsconditionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('booking', function() {
    return view('emails.bookings.booking_confirm_1');
});

// customer registration
Route::post('customer_create', [Usercontroller::class, 'customerCreate'])->name('customer_create');
Route::get('customers', [Usercontroller::class, 'customers'])->name('customers');
Route::get('customers_details/{id}', [Usercontroller::class, 'customerDetails'])->name('customers_details');
Route::get('users', [Usercontroller::class, 'users'])->name('users');
Route::post('user_create', [Usercontroller::class, 'userCreate'])->name('user_create');

// frontend routes
Route::get('fe_home', [FrontendController::class, 'index'])->name('fe_home');
Route::get('destinations', [FrontendController::class, 'destinations'])->name('destinations');
Route::get('destination_details/{id}', [FrontendController::class, 'destination_details'])->name('destination_details');
Route::get('packages', [FrontendController::class, 'packages'])->name('packages');
Route::get('package_details/{id}', [FrontendController::class, 'package_details'])->name('package_details');
Route::post('enquiry_email', [EnquiryController::class, 'enquiry_email'])->name('enquiry_email');

// payement route
Route::post('payment', [Paymentcontroller::class, 'payment'])->name('payment');
Route::get('payment_success', [Paymentcontroller::class, 'payment_success'])->name('payment_success');
Route::get('payment_cancel', [Paymentcontroller::class, 'payment_cancel'])->name('payment_cancel');

// dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// destinations
Route::get('app/destinations', [DestinationController::class, 'index'])->name('app.destinations');
Route::get('app/destinations/create', [DestinationController::class, 'create'])->name('app.destinations.create');
Route::post('app/destinations/store', [DestinationController::class, 'store'])->name('app.destinations.store');
Route::get('app/destinations/edit/{id}', [DestinationController::class, 'edit'])->name('app.destinations.edit');
Route::put('app/destinations/update/{id}', [DestinationController::class, 'update'])->name('app.destinations.update');
Route::delete('app/destinations/delete/{id}', [DestinationController::class, 'destroy'])->name('app.destinations.delete');

// packages
Route::get('app/packages', [PackageController::class, 'index'])->name('app.packages');
Route::get('app/packages/create', [PackageController::class, 'create'])->name('app.packages.create');
Route::post('app/packages/store', [PackageController::class, 'store'])->name('app.packages.store');

// itinerary
Route::get('app/itinerary', [ItineraryController::class, 'index'])->name('app.itinerary');
Route::get('app/itinerary/create', [ItineraryController::class, 'create'])->name('app.itinerary.create');
Route::post('app/itinerary/store', [ItineraryController::class, 'store'])->name('app.itinerary.store');
Route::get('app/getItineraryByDestination/{id}', [ItineraryController::class, 'getItineraryByDestination'])->name('app.getItineraryByDestination');

// enquiry
Route::get('app/enquiries', [EnquiryController::class, 'index'])->name('app.enquiries');

// booking
Route::get('app/bookings', [BookingController::class, 'index'])->name('app.bookings');
Route::get('app/bookings/create_for_enquired/{id}', [BookingController::class, 'createForEnquired'])->name('app.bookings.createForEnquired');
Route::get('app/bookings/create_booking', [BookingController::class, 'createBooking'])->name('app.bookings.create_booking');
Route::get('app/bookings/create_booking_for_enquired/{id}', [BookingController::class, 'createBookingForEnquired'])->name('app.bookings.create_booking_for_enquired');
Route::get('app/bookings/create_voucher/{id}', [BookingController::class, 'createVoucher'])->name('app.bookings.create_voucher');
Route::post('app/bookings/store', [BookingController::class, 'store'])->name('app.bookings.store');
Route::post('app/bookings/store_voucher', [BookingController::class, 'storeVoucher'])->name('app.bookings.store_voucher');
Route::get('app/booking_details/show/{id}', [BookingController::class, 'show'])->name('app.booking_details');
Route::post('app/booking/update_booking_status', [BookingController::class, 'updateStatus'])->name('app.update_booking_status');

// as post
Route::get('app/ad', [AdController::class, 'index'])->name('app.ad');
Route::get('app/ad/create', [AdController::class, 'create'])->name('app.ad.create');
Route::post('app/ad/store', [AdController::class, 'store'])->name('app.ad.store');

// about us
Route::get('app/about_us', [AboutusController::class, 'index'])->name('app.about_us');
Route::get('app/about_us/create', [AboutusController::class, 'create'])->name('app.about_us.create');
Route::post('app/about_us/store', [AboutusController::class, 'store'])->name('app.about_us.store');
Route::get('app/about_us/edit/{id}', [AboutusController::class, 'edit'])->name('app.about_us.edit');
Route::put('app/about_us/update/{id}', [AboutusController::class, 'update'])->name('app.about_us.update');
Route::delete('app/about_us/delete/{id}', [AboutusController::class, 'delete'])->name('app.about_us.delete');

// privacy policy
Route::get('app/privacy_policy', [PrivacypolicyController::class, 'index'])->name('app.privacy_policy');
Route::get('app/privacy_policy/create', [PrivacypolicyController::class, 'create'])->name('app.privacy_policy.create');
Route::post('app/privacy_policy/store', [PrivacypolicyController::class, 'store'])->name('app.privacy_policy.store');
Route::get('app/privacy_policy/edit/{id}', [PrivacypolicyController::class, 'edit'])->name('app.privacy_policy.edit');
Route::put('app/privacy_policy/update/{id}', [PrivacypolicyController::class, 'update'])->name('app.privacy_policy.update');
Route::delete('app/privacy_policy/delete/{id}', [PrivacypolicyController::class, 'delete'])->name('app.privacy_policy.delete');

// Terms And Conditions
Route::get('app/terms_conditions', [TermsconditionsController::class, 'index'])->name('app.terms_conditions');
Route::get('app/terms_conditions/create', [TermsconditionsController::class, 'create'])->name('app.terms_conditions.create');
Route::post('app/terms_conditions/store', [TermsconditionsController::class, 'store'])->name('app.terms_conditions.store');
Route::get('app/terms_conditions/edit/{id}', [TermsconditionsController::class, 'edit'])->name('app.terms_conditions.edit');
Route::put('app/terms_conditions/update/{id}', [TermsconditionsController::class, 'update'])->name('app.terms_conditions.update');
Route::delete('app/terms_conditions/delete/{id}', [TermsconditionsController::class, 'delete'])->name('app.terms_conditions.delete');

// refund policy
Route::get('app/refund_policy', [RefundpolicyController::class, 'index'])->name('app.refund_policy');
Route::get('app/refund_policy/create', [RefundpolicyController::class, 'create'])->name('app.refund_policy.create');
Route::post('app/refund_policy/store', [RefundpolicyController::class, 'store'])->name('app.refund_policy.store');
Route::get('app/refund_policy/edit/{id}', [RefundpolicyController::class, 'edit'])->name('app.refund_policy.edit');
Route::put('app/refund_policy/update/{id}', [RefundpolicyController::class, 'update'])->name('app.refund_policy.update');
Route::delete('app/refund_policy/delete/{id}', [RefundpolicyController::class, 'delete'])->name('app.refund_policy.delete');

// contact us
Route::get('app/contact_us', [ContactusController::class, 'index'])->name('app.contact_us');
Route::get('app/contact_us/create', [ContactusController::class, 'create'])->name('app.contact_us.create');
Route::post('app/contact_us/store', [ContactusController::class, 'store'])->name('app.contact_us.store');
Route::get('app/contact_us/edit/{id}', [ContactusController::class, 'edit'])->name('app.contact_us.edit');
Route::put('app/contact_us/update/{id}', [ContactusController::class, 'update'])->name('app.contact_us.update');
Route::delete('app/contact_us/delete/{id}', [ContactusController::class, 'delete'])->name('app.contact_us.delete');

Route::get('/index', function() {
    return view('pages.frontend.index');
});
Route::get('about', function() {
    return view('pages.frontend.about_us');
});
Route::get('contact', function() {
    return view('pages.frontend.contact_us');
});



Route::get('des-c', function() {
    return view('pages.backend.destinations.create');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
