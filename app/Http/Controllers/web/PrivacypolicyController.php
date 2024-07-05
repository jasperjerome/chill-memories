<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Privacypolicy;
use Illuminate\Http\Request;

class PrivacypolicyController extends Controller
{
    public function index() {
        $data = Privacypolicy::get();
        // return $data;
        return view('pages.backend.privacy_policy.index', compact('data'));
    }
    
    public function create() {
        return view('pages.backend.privacy_policy.create');
    }

    public function store(Request $request) {
        $data = new Privacypolicy;

        $data->title = $request->get('title');
        $data->desc = $request->get('desc');
        $data->save();

        return redirect()->route('app.privacy_policy')->with('create', 'Data Created Successfully');
    }

    public function edit($id) {
        $data = Privacypolicy::findOrFail($id);
        return view('pages.backend.privacy_policy.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Privacypolicy::findOrFail($id);

        $data->title = $request->get('title');
        $data->desc = $request->get('desc');
        $data->save();

        return redirect()->route('app.privacy_policy')->with('update', 'Data Updated Successfully');
    }

    public function delete($id) {
        $data = Privacypolicy::findOrFail($id);

        $data->delete();
        return redirect()->route('app.privacy_policy')->with('delete', 'Data Deleted Successfully');
    }
}
