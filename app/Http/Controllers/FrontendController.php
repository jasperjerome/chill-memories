<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Itinerary;
use App\Models\Package;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index() {
        return view('pages.frontend.index');
    }

    public function destinations() {
        $destinations = Destination::get();

        return view('pages.frontend.destination', compact('destinations'));
    }

    public function destination_details($id) {
        $data = Destination::with('packages')->findOrFail($id);
        return view('pages.frontend.destination_details', compact('data'));
    }

    public function package_details($id) {
        $data = Package::with(['destination'])->findOrFail($id);

        $itineraryIds = json_decode($data->itinerary);
        $itineraries = Itinerary::whereIn('id', $itineraryIds)->get();
        // return $itineraries;
        return view('pages.frontend.package_details', compact('data', 'itineraries'));
    }
}
