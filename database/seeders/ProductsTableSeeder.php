<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'productcode' => Str::random(10),
                'name' => 'Creatine',
                'price' => 23,
                'stock' => 100,
                'description' => 'To define muscle.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'productcode' => Str::random(10),
                'name' => 'Whey Protein',
                'price' => 150,
                'stock' => 50,
                'description' => 'As a helper to gain more protein.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'productcode' => Str::random(10),
                'name' => 'Dumbell',
                'price' => 230,
                'stock' => 72,
                'description' => 'To help build muscle.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'productcode' => Str::random(10),
                'name' => 'Strap',
                'price' => 12,
                'stock' => 92,
                'description' => 'To enhance grip.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'productcode' => Str::random(10),
                'name' => 'Water Bottle 5l',
                'price' => 32,
                'stock' => 18,
                'description' => 'To keep hydrated.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
