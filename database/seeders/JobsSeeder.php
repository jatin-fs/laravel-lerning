<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            'queue' => Str::random(10),
            'payload' => Str::random(10),
            'attempts' => 1,
            'available_at' => now() . date('H:i:s'),
            'created_at' => now() . date('H:i:s'),
        ]);
    }
}
