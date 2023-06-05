<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        $products = Product::where('featured', '=', '1')->inRandomOrder()->take(4)->get();
        return view('frontend.home', compact('products'));
    }
}
