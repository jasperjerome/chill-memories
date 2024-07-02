<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Destination;
use App\Models\Enquiry;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        $data = Booking::get();
        return view('pages.backend.bookings.index', compact('data'));
    }

    public function createBooking() {
        $destinations = Destination::get();
        $packages = Package::get();
        return view('pages.backend.bookings.create_booking', compact('destinations', 'packages'));
    }

    public function store(Request $request) {
        // return $request;
        $data = new Booking;
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->mobile = $request->get('mobile');
        $data->destination = $request->get('destination');
        $data->no_of_adults = $request->get('no_of_adults');
        $data->no_of_children = $request->get('no_of_children');
        $data->from = $request->get('from');
        $data->to = $request->get('to');
        $data->package = $request->get('package');
        $data->source = $request->get('source');
        $data->save();

        return redirect()->route('app.bookings')->with('create', 'Booking Created Successfully');
    }

    public function createBookingForEnquired($id) {
        $data = Enquiry::findOrFail($id);
        $destinations = Destination::get();
        $packages = Package::get();
        return view('pages.backend.bookings.create_booking', compact('data', 'destinations', 'packages'));
    }

    // public function createForEnquired($id) {
    //     $data = Enquiry::findOrFail($id);

    //     return view('pages.backend.bookings.create', compact('data'));
    // }

}
