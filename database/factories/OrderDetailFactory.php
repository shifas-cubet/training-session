<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>27.29

     */
    public function definition(): array
    {
        $order = Order::query()->inRandomOrder()->first();
        $product = Product::query()->inRandomOrder()->first();

        return [
            'order_id' => $order->id,
            'product_id' =>  $product->id,
            'quantity' => fake()->numberBetween(1, 5),
            'unit_price' => fake()->randomFloat(2, 10, 100),
            'subtotal' => fake()->randomFloat(2, 20, 200),
        ];
    }
}
