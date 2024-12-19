<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class StoreFront extends Component
{
    public function render(): View
    {
        return view('livewire.store-front');
    }

    #[Computed]
    protected function products(): Collection
    {
        return Product::query()->get();
    }
}
