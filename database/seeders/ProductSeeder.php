<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'description' => 'High-performance laptop with 16GB RAM.',
                'price' => 1200.00,
                'stock' => 10,
                'seller_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Latest model with 5G connectivity.',
                'price' => 800.00,
                'stock' => 15,
                'seller_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'description' => 'Noise-canceling over-ear headphones.',
                'price' => 150.00,
                'stock' => 25,
                'seller_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Water-resistant smartwatch with health tracking.',
                'price' => 250.00,
                'stock' => 30,
                'seller_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gaming Mouse',
                'description' => 'Ergonomic gaming mouse with RGB lighting.',
                'price' => 50.00,
                'stock' => 40,
                'seller_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}