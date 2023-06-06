<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index() {
        return view('frontend.collections.index');
    }

    public function products(Category $category) {
        $products = $category->products()->get();

        if (request()->sort === 'low-to-high') {
            $products = $products->sortBy('price');
        }elseif (request()->sort === 'high-to-low') {
            $products = $products->sortByDesc('price');
        }

        return view('frontend.products.index',compact('category', 'products'));
    }
}
