<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Stripe\Checkout\Session;
// use Session;
use Stripe;
use Stripe\Product;

// require __DIR__.'/vendor/autoload.php';



class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function Payment()
    {
        return view('pages.payment');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request, Response $response)
    {

        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $session = \Stripe\Checkout\Session::create([
                'line_items' => [[
                    'name' => $request->name,
                    'amount' => $request->amount * 100,
                    'currency' => 'gbp',
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => 'http://localhost:8000/',
                'cancel_url' => 'http://localhost:8000/',
            ]);


            return Redirect::to($session->url);
        } catch (Exception $e) {
            return back()->with('cancel', $e->getMessage());
        }
    }
}

