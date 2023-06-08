<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
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
        $totalPrice = 0;

        foreach ($cartItems as $cartItem) {
            $totalPrice += $cartItem->price;

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
            'cancel_url' => route('checkout.failure', [], true),
        ]);

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'status' => OrderStatus::NEW,
            'total_price' => $totalPrice,
        ]);

        Payment::create([
            'order_id' => $order->id,
            'session_id' => $checkoutSession->id,
            'status' => PaymentStatus::PENDING,
            'method' => 'Paid via stripe'
        ]);

        return redirect($checkoutSession->url);

    }

    public function success() {
        $stripe = new StripeClient(config('stripe.sk'));

        try {
            $session = $stripe->checkout->sessions->retrieve($_GET['session_id']);

            if(!$session) {
                return view('frontend.checkout.failure');
            }

            $payment = Payment::where(['session_id' =>  $session->id, 'status'=> PaymentStatus::PENDING])->first();

            if (!$payment) {
                return view('frontend.checkout.failure');
            }

            $payment->update([
                'status' => PaymentStatus::PAID,
            ]);

            $order = $payment->order;

            $order->update([
                'status' => OrderStatus::PROCESSING,
            ]);

            foreach (Cart::content() as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'quantity' => $item->qty,
                    'unit_price' => $item->price,
                ]);
            }

            Cart::destroy();

            $customer = $stripe->customers->retrieve($session->customer);

            return view('frontend.checkout.success', compact('customer'));
        } catch (\Exception $e) {
            return view('frontend.checkout.failure');
        }
    }

    public function failure() {
        return view('frontend.checkout.failure');
    }
}
