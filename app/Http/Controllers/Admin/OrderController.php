<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::latest()->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order) {
        return view('admin.orders.show', compact('order'));
    }

    public function viewInvoice(Order $order) {
        return view('admin.orders.invoice', compact('order'));
    }

    public function downloadInvoice(Order $order) {
        $today = Carbon::now()->format('d-m-Y');

        $pdf =  PDF::loadView('admin.orders.invoice', compact('order'));

        return $pdf->download('invoice-'.$order->id.$today.'.pdf');
    }
}
