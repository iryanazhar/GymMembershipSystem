<?php
namespace Database\Seeders;

use Faker\Factory as Faker;
$faker = Faker::create('ms_MY');


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $faker = \Faker\Factory::create();

    for ($i = 0; $i < 20; $i++) {
        \App\Models\Member::create([
            'id' => $faker->unique()->numerify('M####'), // Unique member ID
            'name' => $faker->name,
            'contact_information' => $faker->numerify('01#-########'),
            'membership_package_id' => $faker->randomElement(['Basic', 'Pro', 'Student', 'Daily Access']),
            'gender' => $faker->randomElement(['male', 'female']),
            'join_date' => $faker->date(),
            'status' => $faker->randomElement(['active', 'inactive']),
        ]);
    }
    }
}
