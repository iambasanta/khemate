<?php

namespace App\Http\Livewire\Frontend\Products;

use Livewire\Component;

class Index extends Component
{
    public $products;

    public function mount($products) {
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.frontend.products.index',[
            'products' => $this->products,
        ]);
    }
}
