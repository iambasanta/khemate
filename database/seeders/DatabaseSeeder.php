<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(10)->create();
        Product::factory(20)->create();
        Order::factory(10)->create();
        Payment::factory(10)->create();
        OrderItem::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@khemate.com',
        ]);
    }
}
