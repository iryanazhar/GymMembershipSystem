<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => 'Basic Package',
                'description' => 'This is a basic package offering minimal features.',
                'price' => 19.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Standard Package',
                'description' => 'This package offers a balance of features at a moderate price.',
                'price' => 49.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium Package',
                'description' => 'This premium package includes all available features.',
                'price' => 99.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
