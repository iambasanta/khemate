<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\StripeClient;

class CheckoutController extends Controller
{
    public function index() {
        return view('frontend.checkout');
    }

    public function checkout() {

        $stripe = new StripeClient(config('stripe.sk'));

        $cartItems = Cart::content();

        $lineItems = [];

        foreach ($cartItems as $cartItem) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $cartItem->name,
                    ],
                    'unit_amount' => $cartItem->price * 100,
                ],
                'quantity' => 1,
            ];
        }

        $checkoutSession = $stripe->checkout->sessions->create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true).'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.cancel', [], true),
        ]);


        return redirect($checkoutSession->url);

    }

    public function success(Request $request) {
        try {
            $stripe = new \Stripe\StripeClient(config('stripe.sk'));
            $session = $stripe->checkout->sessions->retrieve($request->get('session_id'));

            if(!$session) {
                return view('frontend.checkout.failure');
            }
            $customer = $stripe->customers->retrieve($session->customer);

            return view('frontend.checkout.success', compact('customer'))->with('success', 'Payment successful!');
        } catch (\Exception $e) {
            return view('frontend.checkout.failure');
        }
    }

    public function cancel() {

    }
}
