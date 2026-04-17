<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderProduct;

class OrderProductSeeder extends Seeder
{
    public function run(): void
    {
        OrderProduct::factory()->count(10)->create();
    }
}