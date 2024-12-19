<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    /**
     * Get the variants for products.
     */
    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * Get the image associate for products
     */
    public function image(): HasOne
    {
        return $this->hasOne(Image::class)->ofMany('featured', 'max');
    }

    /**
     * Get the images for products.
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
