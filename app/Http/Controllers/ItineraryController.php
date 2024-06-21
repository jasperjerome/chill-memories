<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Itinerary;
use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Itinerary::with('destination')->get();

        return view('pages.backend.itinerary.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinations = Destination::get();
        return view('pages.backend.itinerary.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Itinerary;

        $data->destination_id = $request->get('destination_id');
        $data->title = $request->get('title');
        $data->desc = $request->get('desc');

        $data->save();

        return response()->json(['success' => true, 'data' => $data, 'message' => 'Itinerary Created Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Itinerary $itinerary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Itinerary $itinerary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Itinerary $itinerary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Itinerary $itinerary)
    {
        //
    }

    public function getItineraryByDestination($id) {
        $itineraries = Itinerary::where('destination_id', $id)->get();
        return response()->json($itineraries);
    }
}
