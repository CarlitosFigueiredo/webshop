<?php

namespace App\Livewire;

use App\Models\Product as ModelsProduct;
use Illuminate\View\View;
use Livewire\Component;

class Product extends Component
{
    public $productId;

    public function render(): View
    {
        return view('livewire.product');
    }

    public function getProductProperty(): \App\Models\Product
    {
        return \App\Models\Product::findOrFail($this->productId);
    }
}
