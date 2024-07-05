<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index() {
        $data = Contactus::get();
        // return $data;
        return view('pages.backend.contact_us.index', compact('data'));
    }
    
    public function create() {
        return view('pages.backend.contact_us.create');
    }

    public function store(Request $request) {
        $data = new Contactus;

        $data->mobile = $request->get('mobile');
        $data->email = $request->get('email');
        $data->address = $request->get('address');
        $data->save();

        return redirect()->route('app.contact_us')->with('create', 'Data Created Successfully');
    }

    public function edit($id) {
        $data = Contactus::findOrFail($id);
        return view('pages.backend.contact_us.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Contactus::findOrFail($id);

        $data->mobile = $request->get('mobile');
        $data->email = $request->get('email');
        $data->address = $request->get('address');
        $data->save();

        return redirect()->route('app.contact_us')->with('update', 'Data Updated Successfully');
    }

    public function delete($id) {
        $data = Contactus::findOrFail($id);

        $data->delete();
        return redirect()->route('app.contact_us')->with('delete', 'Data Deleted Successfully');
    }
}