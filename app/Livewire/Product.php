<?php

namespace App\Livewire;

use App\Actions\WebShop\AddProductVariantToCard;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Product extends Component
{
    public int $productId;
    public string $variant;

    public array $rules = [
        'variant' => ['required', 'exists:App\Models\ProductVariant,id'],
    ];

    public function mount(): void
    {
        $this->variant = $this->product->variants()->value('id');
    }

    public function addToCart(AddProductVariantToCard $cart): void
    {
        $this->validate();

        $cart->add(variantId: $this->variant);
    }

    public function render(): View
    {
        return view('livewire.product');
    }

    #[Computed]
    protected function product(): \App\Models\Product
    {
        return \App\Models\Product::findOrFail($this->productId);
    }
}
