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
        CartFactory::make()->items()->where('id', $itemId)->delete();

        $this->dispatch('productRemovedFromCart');
    }

    public function increment($itemId): void
    {
        CartFactory::make()->items()->find($itemId)?->increment('quantity');
    }

    public function decrement($itemId): void
    {
        $item = CartFactory::make()->items()->find($itemId);

        if ($item->quantity > 1) {
            $item->decrement('quantity');
        }
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
