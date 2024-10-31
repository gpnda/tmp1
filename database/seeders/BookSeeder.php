<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i=0 ; $i<10 ; $i++) {
            Book::create([
                'title' => ucfirst($faker->words(nb: random_int(min: 1,max: 5), asText: true )),
                'year' => $faker->year(),
                'description' => ucfirst($faker->sentences(nb: random_int(min: 2,max: 3),asText: true)),
            ]);
        }

    }
}
