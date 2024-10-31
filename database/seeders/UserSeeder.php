<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        //User::factory(10)->create();

        User::factory()->create([
            'name' => $faker->name(),
            'email' => $faker->email(),
        ]);
    }
}
