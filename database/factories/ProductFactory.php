<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->numberBetween(1000, 2000),
            'quantity' => fake()->numberBetween(1,10),
            // 'active' => fake()->name(),
            'description' => fake()->text(100),


        ];
    }
}
