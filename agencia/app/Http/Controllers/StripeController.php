<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Stripe;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('paypal_view');
    }



    public function stripePost(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose"
        ]);
   
        Session::flash('success', 'Payment successful!');
           
        return back();
        
    }
}

