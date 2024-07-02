<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function customers() {
        $data = User::where('role', 'customer')->get();
        return view('pages.backend.customers.index', compact('data'));
    }

    public function customerCreate(Request $request) {
        $data = new User;

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = $request->get('password');
        $data->role = 'customer';

        $data->save();

        return redirect()->back()->with('create', 'logged in Successfully');
    }
}