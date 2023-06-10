<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderPageController extends Controller
{
    public function index() {
        $orders = auth()->user()->orders;
        return view('frontend.orders.index', compact('orders'));
    }

    public function viewInvoice(Order $order) {
        return view('invoice.invoice', compact('order'));
    }
}
