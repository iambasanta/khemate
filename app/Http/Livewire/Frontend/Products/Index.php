<?php

namespace App\Http\Livewire\Frontend\Products;

use Livewire\Component;

class Index extends Component
{
    public $category;
    public $products;

    public function mount($category, $products) {
        $this->category = $category;
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.frontend.products.index',[
            'category' => $this->category,
            'products' => $this->products,
        ]);
    }
}
