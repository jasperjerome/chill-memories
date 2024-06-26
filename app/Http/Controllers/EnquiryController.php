<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryAdminMail;
use App\Mail\EnquiryVisitorMail;

class EnquiryController extends Controller
{
    

    public function enquiry_email(Request $request) {
        $details = [];

        $details['name'] = $request->get('name');
        $details['email'] = $request->get('email');
        $details['mobile'] = $request->get('mobile');
        $details['destination'] = $request->get('destination');

        Mail::to($request->email)->send(new EnquiryVisitorMail($details));
        Mail::to('jasperjerome4@gmail.com')->send(new EnquiryAdminMail($details));

        // return back()->with('success', 'Your inquiry has been submitted!');
        return 'Your inquiry has been submitted!';
    }
}
