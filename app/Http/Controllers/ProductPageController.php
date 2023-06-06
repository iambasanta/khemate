<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function show(Category $category, Product $product) {
        $product = $category->products()->where('slug', $product->slug)->first();
        $alsoPurchased = Product::where('slug', '!=', $product->slug)->take(4)->get();
        return view('frontend.products.show', compact('product', 'alsoPurchased'));
    }
}
