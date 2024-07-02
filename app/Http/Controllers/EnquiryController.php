<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryAdminMail;
use App\Mail\EnquiryVisitorMail;
use App\Models\Enquiry;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{

    public function index() {
        $data = Enquiry::get();

        return view('pages.backend.enquiries.index', compact('data'));
    }
    

    public function enquiry_email(Request $request) {
        // return $request->all();
        $details = [];

        $details['name'] = $request->get('name');
        $details['email'] = $request->get('email');
        $details['mobile'] = $request->get('mobile');
        $details['destination'] = $request->get('destination');

        $user = User::create([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'mobile'=>$request->get('mobile'),
            'role'=>'customer',
        ]);
        
        $data = new Enquiry;

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->mobile = $request->get('mobile');
        $data->destination = $request->get('destination');
        $data->no_of_adults = $request->get('no_of_adults');
        $data->no_of_children = $request->get('no_of_children');
        $data->from = $request->get('from');
        $data->to = $request->get('to');
        $data->save();

        // Mail::to($request->email)->send(new EnquiryVisitorMail($details));
        // Mail::to('jasperjerome4@gmail.com')->send(new EnquiryAdminMail($details));

        return redirect()->back()->with('create', 'Your inquiry has been submitted!');
    }
}
