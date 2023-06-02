<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        $categoryId = Category::pluck('id')->random();

        return [
            'category_id' => $categoryId,
            'name' => fake()->name(),
            'slug' => fake()->unique()->slug(),
            'description' => fake()->paragraph(),
            'featured' => fake()->boolean(),
            'image' => fake()->imageUrl(),
            'price' => fake()->randomFloat(2, 1, 100),
            'quantity' => fake()->numberBetween(1,50),
        ];
    }
}
