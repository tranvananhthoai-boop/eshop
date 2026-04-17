<?php

namespace Database\Factories;

use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductFactory extends Factory
{
    protected $model = OrderProduct::class;

    public function definition(): array
    {
        return [
            'order_id' => 1,
            'product_id' => 1,
             'amount' => $this->faker->numberBetween(1, 5),
        ];
    }
}