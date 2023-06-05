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
        return view('frontend.products.index');
    }

    public function show(Category $category) {
        return view('frontend.products.show');
    }
}
