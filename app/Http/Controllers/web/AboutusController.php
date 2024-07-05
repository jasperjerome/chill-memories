<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index() {
        $data = Aboutus::get();
        return view('pages.backend.aboutus.index', compact('data'));
    }
    
    public function create() {
        return view('pages.backend.aboutus.create');
    }

    public function store(Request $request) {
        $data = new Aboutus;

        $data->title = $request->get('title');
        $data->desc = $request->get('desc');

        // ad post img
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $img->move('assets/uploads/ad_imgs', $filename);
            $data->img = $filename;
        }
        $data->save();

        return redirect()->route('app.about_us')->with('create', 'Data Created Successfully');
    }

    public function edit($id) {
        $data = Aboutus::findOrFail($id);
        return view('pages.backend.aboutus.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Aboutus::findOrFail($id);

        $data->title = $request->get('title');
        $data->desc = $request->get('desc');

        // ad post img
        if ($request->hasFile('img')) {
            // Delete old image
            if ($data->img && file_exists(public_path('assets/uploads/ad_imgs/' . $data->feature_img))) {
                unlink(public_path('assets/uploads/ad_imgs/' . $data->feature_img));
            }
            //save new img
            $img = $request->file('img');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $img->move('assets/uploads/ad_imgs', $filename);
            $data->img = $filename;
        }


        $data->save();

        return redirect()->route('app.about_us')->with('update', 'Data Updated Successfully');
    }

    public function delete($id) {
        $data = Aboutus::findOrFail($id);

        $data->delete();
        return redirect()->route('app.about_us')->with('delete', 'Data Deleted Successfully');
    }
}
