<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Clothing and Apparel'],
            ['name' => 'Home and Furniture'],
            ['name' => 'Books and Stationery'],
            ['name' => 'Beauty and Personal Care'],
            ['name' => 'Sports and Outdoors'],
            ['name' => 'Toys and Games'],
            ['name' => 'Health and Wellness'],
            ['name' => 'Jewelry and Accessories'],
            ['name' => 'Kitchen and Dining'],
        ];

        Category::query()->insert($categories);
    }
}
