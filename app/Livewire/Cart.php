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
        $this->cart->items()->where('id', $itemId)->delete();

        $this->dispatch('productRemovedFromCart');
    }

    public function increment($itemId): void
    {
        $this->cart->items()->find($itemId)?->increment('quantity');
    }

    public function decrement($itemId): void
    {
        $item = $this->cart->items()->find($itemId);

        if ($item->quantity > 1) {
            $item->decrement('quantity');
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }

    #[Computed()]
    protected function cart()
    {
        return CartFactory::make()->loadMissing(['items', 'items.product', 'items.variant']);
    }

    #[Computed()]
    protected function items(): Collection
    {
        return $this->cart->items;
    }
}
