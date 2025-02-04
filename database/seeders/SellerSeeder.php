<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    public function run()
    {
        DB::table('sellers')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '1234567890',
                'address' => '123 Main Street, New York, NY',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '9876543210',
                'address' => '456 Elm Street, Los Angeles, CA',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'phone' => '1231231234',
                'address' => '789 Oak Avenue, Chicago, IL',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Williams',
                'email' => 'bob@example.com',
                'phone' => '4564564567',
                'address' => '321 Maple Lane, Houston, TX',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emily@example.com',
                'phone' => '7897897890',
                'address' => '654 Pine Road, Miami, FL',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}