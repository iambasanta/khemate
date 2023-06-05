<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index() {
        return view('frontend.collections.index');
    }

    public function products(Category $category) {
        $products = $category->products()->get();
        return view('frontend.products.index',compact('category', 'products'));
    }

    public function show(Category $category, Product $product) {
        $product = $category->products()->where('slug', $product->slug)->first();
        $alsoPurchased = Product::where('slug', '!=', $product->slug)->take(4)->get();
        return view('frontend.products.show', compact('product', 'alsoPurchased'));
    }
}
