<?php

namespace App\Actions\WebShop;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class AddProductVariantToCard
{
    public function add($variantId): void
    {
        if (Auth::guest()) {

            $cart = Cart::firstOrCreate([
                'session_id' => session()->getId(),
            ]);
        }

        if (Auth::user()) {
            $cart = Auth::user()->cart ?: Auth::user()->cart()->create();
        }


        dd($cart);
    }
}
