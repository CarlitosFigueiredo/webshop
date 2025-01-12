<?php

namespace App\Livewire;

use App\Factories\CartFactory;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Cart extends Component
{
    public function delete($itemId): void
    {
        $this->dispatch('productRemovedFromCart');
        CartFactory::make()->items()->where('id', $itemId)->delete();
    }

    public function render()
    {
        return view('livewire.cart');
    }

    #[Computed()]
    protected function items(): Collection
    {
        return CartFactory::make()->items;
    }
}
