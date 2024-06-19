<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Product extends Component
{
    public $productId;

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.product');
    }

    #[Computed()]
    public function product()
    {
        return \App\Models\Product::findOrFail($this->productId);
    }
}