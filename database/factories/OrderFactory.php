<?php

namespace Database\Factories;

use App\Models\Order;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{

    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = \App\Models\User::query()->inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'order_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'total_amount' => fake()->randomFloat(2, 50, 500),
            'payment_status' => fake()->randomElement(['pending', 'completed', 'cancelled'])
        ];
    }
}
