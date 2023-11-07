<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->word,
            'detail' => fake()->sentence,
            'price' => fake()->randomFloat(2, 10, 200),
            'stock' => fake()->numberBetween(1, 100),
            'image_path' => fake()->randomElement(['image1.jpg', 'image2.jpg', 'image3.jpg']),
            'category_id' => fake()->numberBetween(1, 10),
        ];

    }
}
