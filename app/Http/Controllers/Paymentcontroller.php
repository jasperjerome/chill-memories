<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;



class Paymentcontroller extends Controller
{
    
    public function payment(Request $request) {

        $user = Auth::user();

        if(isset($request->razorpay_payment_id) && $request->razorpay_payment_id != '') {
            $api = new Api(env('RAZORPAY_API_KEY'), env('RAZORPAY_API_KEY_SECRET'));
            $payment = $api->payment->fetch($request->razorpay_payment_id);
            $response = $payment->capture(array('amount'=>$payment->amount));
            // dd($response);

            $payment = new Payment;
            $payment->payment_id = $response['id'];
            $payment->user_id = $user->id;
            $payment->package_id = '1';
            $payment->name = $user->name;
            $payment->email = $user->email;
            $payment->amount = $response['amount'];
            $payment->payment_method = $response['method'];
            $payment->payment_status = $response['status'];
            $payment->if_card = 'if payment via card ';

            $payment->save();
            return redirect()->back()->with('payment', 'success');
        }
    }
}
