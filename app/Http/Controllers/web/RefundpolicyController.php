<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Refundpolicy;
use Illuminate\Http\Request;

class RefundpolicyController extends Controller
{
    public function index() {
        $data = Refundpolicy::get();
        // return $data;
        return view('pages.backend.refund_policy.index', compact('data'));
    }
    
    public function create() {
        return view('pages.backend.refund_policy.create');
    }

    public function store(Request $request) {
        $data = new Refundpolicy;

        $data->title = $request->get('title');
        $data->desc = $request->get('desc');
        $data->save();

        return redirect()->route('app.refund_policy')->with('create', 'Data Created Successfully');
    }

    public function edit($id) {
        $data = Refundpolicy::findOrFail($id);
        return view('pages.backend.refund_policy.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Refundpolicy::findOrFail($id);

        $data->title = $request->get('title');
        $data->desc = $request->get('desc');
        $data->save();

        return redirect()->route('app.refund_policy')->with('update', 'Data Updated Successfully');
    }

    public function delete($id) {
        $data = Refundpolicy::findOrFail($id);

        $data->delete();
        return redirect()->route('app.refund_policy')->with('delete', 'Data Deleted Successfully');
    }
}
