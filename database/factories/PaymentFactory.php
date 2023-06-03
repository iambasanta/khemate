<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::pluck('id')->random();
        $orderId = Order::pluck('id')->random();

        return [
            'user_id' => $userId,
            'order_id' => $orderId,
            'status' => fake()->randomElement(['unpaid', 'pending', 'paid']),
            'method' => fake()->randomElement(['Cash on Delivery', 'Paid via Paypal'])
        ];
    }
}
