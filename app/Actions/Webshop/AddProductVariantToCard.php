<?php

namespace App\Actions\WebShop;

use App\Factories\CartFactory;

class AddProductVariantToCard
{
    public function add($variantId): void
    {
        CartFactory::make()->items()->create([

            'product_variant_id' => $variantId,
            'quantity' => 1,
        ]);
    }
}
