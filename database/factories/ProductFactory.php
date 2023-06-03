<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        $categoryId = Category::pluck('id')->random();
        $name = fake()->name();

        return [
            'category_id' => $categoryId,
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'featured' => fake()->boolean(),
            'image' => fake()->imageUrl(),
            'price' => fake()->randomFloat(2, 1, 100),
            'quantity' => fake()->numberBetween(1,50),
        ];
    }
}
