<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderPageController extends Controller
{
    public function index() {
        $orders = auth()->user()->orders;
        return view('frontend.orders.index', compact('orders'));
    }
}
