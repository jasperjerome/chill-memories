<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Itinerary;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{

    public function index()
    {
        return view('pages.frontend.index');
    }

    public function destinations()
    {
        $destinations = Destination::get();

        return view('pages.frontend.destination', compact('destinations'));
    }

    public function destination_details($id)
    {
        $data = Destination::with('packages')->findOrFail($id);
        $apiKey = env('WEATHER_API_KEY');
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . $data->title . "&appid=" . $apiKey;

        $response = Http::get($apiUrl);
        if ($response->successful()) {
            $weather = json_decode($response, true); // remove json_decode function if needed
        } else {
            $weather = 'Check Your Network Connection';
        }
        return view('pages.frontend.destination_details', compact('data', 'weather'));
    }

    public function packages() {
        $packages = Package::with('destination')->get();
        return view('pages.frontend.packages', compact('packages'));
    }
    public function package_details($id)
    {
        $data = Package::with(['destination'])->findOrFail($id);
        $destinations = Destination::get();

        $itineraryIds = json_decode($data->itinerary);
        $itineraries = Itinerary::whereIn('id', $itineraryIds)->get();
        // return $itineraries;
        return view('pages.frontend.package_details', compact('data', 'itineraries', 'destinations'));
    }
}
