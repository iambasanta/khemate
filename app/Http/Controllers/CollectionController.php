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
        return view('frontend.products.index',compact('category', 'products'));
    }
}
