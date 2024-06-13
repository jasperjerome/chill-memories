<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function destinations() {
        $destinations = Destination::get();

        return view('pages.frontend.destination', compact('destinations'));
    }

    public function destination_details($id) {
        $data = Destination::with('packages')->findOrFail($id);
        return view('pages.frontend.destination_details', compact('data'));
    }

    public function package_details($id) {
        $data = Package::with('destination')->findOrFail($id);
        // return $data;
        return view('pages.frontend.package_details', compact('data'));
    }
}
