<?php

namespace App\Actions\WebShop;

use App\Factories\CartFactory;

class AddProductVariantToCard
{
    public function add($variantId): void
    {
        CartFactory::make()->items()->firstOrCreate(
            ['product_variant_id' => $variantId,],
            ['quantity' => 0]
        )
            ->increment('quantity');
    }
}
