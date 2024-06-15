<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class StoreFront extends Component
{

    public function render()
    {
        return view('livewire.store-front');
    }

    #[Computed()]
    protected function products()
    {
        return Product::all();
    }
}
