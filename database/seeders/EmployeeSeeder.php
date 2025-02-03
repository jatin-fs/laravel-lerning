<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'id' => rand(1, 100),
            'emp_name' => Str::random(10),
            'emp_email' => Str::random(10) . '@gmail.com',
            'emp_password' => Str::random(10),
        ]);
    }
}
