<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\BookingVisitorMail;
use App\Models\Booking;
use App\Models\Destination;
use App\Models\Enquiry;
use App\Models\Package;
use App\Models\User;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index() {
        $data = Booking::with('user')->get();
        // return $data;
        return view('pages.backend.bookings.index', compact('data'));
    }

    public function createBooking() {
        $destinations = Destination::get();
        $packages = Package::get();
        return view('pages.backend.bookings.create_booking', compact('destinations', 'packages'));
    }

    public function store(Request $request) {

        // Check if user_id is set in the request
        $user = null;
        if ($request->has('user_id')) {
            $user = User::find($request->get('user_id'));
        }

        // If user_id is not set or user does not exist, check if a user with the given email or mobile exists
        if (!$user) {
            $user = User::where('email', $request->get('email'))
                        // ->orWhere('mobile', $request->get('mobile'))
                        ->first();

            // If no user is found, create a new user
            if (!$user) {
                $user = User::create([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'password' => $request->get('mobile'), // Set a default password or handle password creation separately
                ]);
            }
        }


        // return $request;
        $data = new Booking;
        $data->user_id = $user->id;
        $data->email = $request->get('email');
        $data->mobile = $request->get('mobile');
        $data->destination = $request->get('destination');
        $data->no_of_adults = $request->get('no_of_adults');
        $data->no_of_children = $request->get('no_of_children');
        $data->from = $request->get('from');
        $data->to = $request->get('to');
        $data->package_id = $request->get('package_id');
        $data->source = $request->get('source');

        $details = [];
        $details['name'] = $user->name;
        $details['destination'] = $request->get('destination');
        $details['from'] = $request->get('from');
        $details['to'] = $request->get('to');
        $details['no_of_adults'] = $request->get('no_of_adults');
        $details['no_of_children'] = $request->get('no_of_children');
        $details['created_at'] = $data->created_at;

        $data->save();
        Mail::to($request->email)->send(new BookingVisitorMail($details));
        return redirect()->route('app.bookings')->with('create', 'Booking Created Successfully');
    }

    public function createBookingForEnquired($id) {
        $data = Enquiry::with('user')->findOrFail($id);
        $destinations = Destination::get();
        $packages = Package::get();
        return view('pages.backend.bookings.create_booking', compact('data', 'destinations', 'packages'));
    }

    public function createVoucher($id) {
        $data = Booking::findOrFail($id);

        $users = User::where('role', 'co-ordinator')->get();

        return view('pages.backend.bookings.create', compact('data', 'users'));
    }

    public function storeVoucher(Request $request) {
        // return $request;
        $data = new Voucher;

        $data->booking_id = $request->get('booking_id');
        $data->pickup_from = $request->get('pickup_from');
        $data->drop_to = $request->get('drop_to');
        $data->user_id = $request->get('user_id');
        $data->hotel_location = json_encode($request->get('hotel_location'));
        $data->hotel_name = json_encode($request->get('hotel_name'));
        $data->other = json_encode($request->get('other'));
        $data->cab = json_encode($request->get('cab'));
        $data->save();

        return redirect()->route('app.bookings')->with('create', 'Voucher Created Successfully');
        
    }

    public function show($id) {
        $data = Booking::with(['voucher.user', 'package', 'user'])->findOrFail($id);
        $hotel_locations = json_decode($data->voucher->hotel_location, true);
        $hotel_names = json_decode($data->voucher->hotel_name, true);
        $others = json_decode($data->voucher->other, true);
        $cabs = json_decode($data->voucher->cab, true);
// return $data;
        return view('pages.backend.bookings.show', compact('data', 'hotel_locations', 'hotel_names', 'others', 'cabs'));
    }

    public function updateStatus(Request $request) {
        $data = Booking::findOrFail($request->id);

        $data->{$request->field} = $request->value;
        $data->save();
        
        return response()->json(['success' => true]);
    }

}
