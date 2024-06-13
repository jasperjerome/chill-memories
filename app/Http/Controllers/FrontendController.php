<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function destinations() {
        $destinations = Destination::get();

        return view('pages.frontend.destination', compact('destinations'));
    }

    public function destination_details($id) {
        $data = Destination::with('packages')->findOrFail($id);

        // return $data;
        return view('pages.frontend.destination_details', compact('data'));
    }
}
