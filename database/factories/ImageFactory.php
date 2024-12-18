<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->unique()->randomElement([
                'media/exemple1.png',
                'media/exemple2.png',
                'media/exemple3.png',
                'media/exemple4.png',
                'media/exemple5.png',
                'media/exemple6.png',
                'media/exemple7.png',
                'media/exemple8.png',
                'media/exemple9.png',
                'media/exemple10.png',
                'media/exemple11.png',
                'media/exemple12.png',
            ])
        ];
    }
}
