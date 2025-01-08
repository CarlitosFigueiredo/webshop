<?php

namespace App\Factories;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartFactory
{
    public static function make(): Cart
    {
        return match (Auth::guest()) {
            true => Cart::firstOrCreate(['session_id' => session()->getId()]),
            false => Auth::user()->cart ?: Auth::user()->cart()->create(),
        };
    }
}
