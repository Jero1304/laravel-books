<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 250; $i++) {
            $book = new Book;

            $book->titolo=$faker->unique()->text(50);
            $book->autore=$faker->text(50);
            $book->casa_editrice=$faker->text(50);
            $book->isbn=$faker->numerify('#############');
            $book->copie=$faker->numberBetween(100,1000);
            $book->pagine=$faker->numberBetween(100,1000);

            $book->save();
            
        }
    }
}