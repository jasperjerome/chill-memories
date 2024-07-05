<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Termsconditions;
use Illuminate\Http\Request;

class TermsconditionsController extends Controller
{
    public function index() {
        $data = Termsconditions::get();
        // return $data;
        return view('pages.backend.terms_conditions.index', compact('data'));
    }
    
    public function create() {
        return view('pages.backend.terms_conditions.create');
    }

    public function store(Request $request) {
        $data = new Termsconditions;

        $data->title = $request->get('title');
        $data->desc = $request->get('desc');
        $data->save();

        return redirect()->route('app.terms_conditions')->with('create', 'Data Created Successfully');
    }

    public function edit($id) {
        $data = Termsconditions::findOrFail($id);
        return view('pages.backend.terms_conditions.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Termsconditions::findOrFail($id);

        $data->title = $request->get('title');
        $data->desc = $request->get('desc');
        $data->save();

        return redirect()->route('app.terms_conditions')->with('update', 'Data Updated Successfully');
    }

    public function delete($id) {
        $data = Termsconditions::findOrFail($id);

        $data->delete();
        return redirect()->route('app.terms_conditions')->with('delete', 'Data Deleted Successfully');
    }
}
