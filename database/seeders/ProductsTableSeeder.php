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
                'name' => 'Sample Product 1',
                'price' => 99.99,
                'stock' => 100,
                'description' => 'This is a description for Sample Product 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'productcode' => Str::random(10),
                'name' => 'Sample Product 2',
                'price' => 49.99,
                'stock' => 50,
                'description' => 'This is a description for Sample Product 2.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'productcode' => Str::random(10),
                'name' => 'Sample Product 3',
                'price' => 19.99,
                'stock' => 200,
                'description' => 'This is a description for Sample Product 3.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
