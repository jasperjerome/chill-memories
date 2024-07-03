<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Destination::get();
        return view('pages.backend.destinations.index', compact('data'));
        // return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Destination;

        $data->title = $request->get('title');
        $data->wheather = $request->get('wheather');
        $data->seo_title = $request->get('seo_title');
        $data->meta_desc = $request->get('meta_desc');
        $data->desc = $request->get('desc');
        $data->long_desc = $request->get('long_desc');
        $data->video_link = $request->get('video_link');

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

        if ($request->images) {
            // destination images
            foreach ($images as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('assets/uploads/destination_imgs', $filename);
                // Save the filename to the array
                $imagePaths[] = $filename;
            }
        }


        // Convert the image paths array to JSON
        $imagePathsJson = json_encode($imagePaths);
        $data->images = $imagePathsJson;

        $data->save();

        return redirect()->route('app.destinations')->with('create', 'Destination Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Destination::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Destination::findOrFail($id);

        return view('pages.backend.destinations.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Destination::findOrFail($id);
        return redirect()->route('app.destinations')->with('update', 'Destination Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Destination::findOrFail($id);

        $data->delete();

        return redirect()->route('app.destinations')->delete('delete', 'Destination Deleted Successfully');
    }
}
