<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
            'title' => fake()->sentence(),
            'description' => fake()->sentence(100, true),
            'discountedPrice' => rand(100, 999) ,
            'mainPrice' => rand(100, 999), // password
            'ownerId' => 2,
        ];
    }
}
