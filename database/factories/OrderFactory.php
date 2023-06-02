<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $userId = User::pluck('id')->random();

        return [
            'user_id' => $userId,
            'total_price' => fake()->randomFloat(2, 1, 100),
            'status' => fake()->randomElement(['new', 'processing', 'shipped', 'delivered', 'cancelled'])
        ];
    }
}
