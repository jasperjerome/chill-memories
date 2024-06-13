<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.ad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Ad;

        $data->title = $request->get('title');

        // ad post img
        if ($request->hasFile('ad_img')) {
            $ad_img = $request->file('ad_img');
            $filename = time() . '.' . $ad_img->getClientOriginalExtension();
            $ad_img->move('assets/uploads/ad_imgs', $filename);
            $data->ad_img = $filename;
        }

        return redirect()->route('app.ad')->with('create', 'Ad Post Saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        //
    }
}
