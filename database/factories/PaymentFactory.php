<?php

namespace Database\Factories;

use App\Models\Order;
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
        $orderId = Order::pluck('id')->random();

        return [
            'order_id' => $orderId,
            'status' => fake()->randomElement(['unpaid', 'pending', 'paid']),
            'method' => fake()->randomElement(['Cash on Delivery', 'Paid via Paypal'])
        ];
    }
}
