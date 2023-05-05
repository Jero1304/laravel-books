<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $faker = Faker::create();
        for ($i = 0; $i < 7; $i++) {
            $authors_new = new Author();

            $authors_new->name = $faker->name(15);
            $authors_new->save();
        }
    }
}