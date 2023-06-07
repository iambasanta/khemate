<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        return view('frontend.cart');
    }

    public function store(Request $request) {

        $product = Product::findOrFail($request->input('product_id'));

        $duplicates = Cart::search( function($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->back()->with('success', 'Product is already in your cart!');
        }

        Cart::add($product->id, $product->name, 1, $product->price)->associate('App\Models\Product');

        return redirect()->back()->with('success', 'Product added to your cart!');
    }


    public function destroy($id) {
        Cart::remove($id);
        return redirect()->back()->with('success', 'Product removed from your cart!');
    }
}
