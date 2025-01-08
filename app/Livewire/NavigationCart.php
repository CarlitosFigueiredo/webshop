<?php

namespace App\Livewire;

use App\Factories\CartFactory;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class NavigationCart extends Component
{
    public $listeners = [
        'productAddedToCart' => '$refresh',
    ];

    public function render(): View
    {
        return view('livewire.navigation-cart');
    }

    #[Computed()]
    protected function count()
    {
        return CartFactory::make()->items()->sum('quantity');
    }
}
