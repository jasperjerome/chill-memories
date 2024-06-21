<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Itinerary;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Package::with('destination')->get();
        // return $itineraries;
        return view('pages.backend.packages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinations = Destination::get();
        $itineraries = Itinerary::with('destination')->get();
        return view('pages.backend.packages.create', compact('destinations', 'itineraries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Package;

        $data->destination_id = $request->get('destination_id');
        $data->package_title = $request->get('package_title');
        $data->cost = $request->get('cost');
        $data->days = $request->get('days');
        $data->nights = $request->get('nights');
        $data->desc = $request->get('desc');
         $itinerary = json_encode($request->input('itinerary'));
         $data->itinerary = $itinerary;
         
        // feature image
        if ($request->hasFile('feature_img')) {
            $feature_img = $request->file('feature_img');
            $filename = time() . '.' . $feature_img->getClientOriginalExtension();
            $feature_img->move('assets/uploads/feature_imgs', $filename);
            $data->feature_img = $filename;
        }
        // breadcrumb image
        if ($request->hasFile('breadcrumb_img')) {
            $breadcrumb_img = $request->file('breadcrumb_img');
            $filename = time() . '.' . $breadcrumb_img->getClientOriginalExtension();
            $breadcrumb_img->move('assets/uploads/breadcrumb_imgs', $filename);
            $data->breadcrumb_img = $filename;
        }

        $images = $request->file('images');
        $imagePaths = [];

        // destination images
        foreach ($images as $image) {
        $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move('assets/uploads/destination_imgs', $filename);
        // Save the filename to the array
        $imagePaths[] = $filename;
        }
    

        // Convert the image paths array to JSON
        $imagePathsJson = json_encode($imagePaths);
        $data->images = $imagePathsJson;

        $data->save();

        return redirect()->route('app.packages')->with('create', 'Package Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
