<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());

        $this->storeImage($request, $product);

        return redirect()->route("admin.products.index")->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.products.edit', compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $oldImage = $product->image;

        $product->update($request->validated());

        $this->storeImage($request, $product);

        if(!is_null($oldImage) && $oldImage !== $product->image) {
            $this->deleteImage($oldImage);
        }

        return redirect()->route("admin.products.index")->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        $this->deleteImage($product->image);
        return redirect()->route("admin.products.index")->with('success', 'Product deleted successfully!');
    }

    private function storeImage($request, $product) {
        if($request->has('image')) {
            $product->update([
                'image' => $request->image->store('/', 'products'),
            ]);
        }
    }

    private function deleteImage($image) {
        if(!is_null($image)) {
            if(Storage::disk('products')->exists($image)) {
                Storage::disk('products')->delete($image);
            }
        }
    }
}
