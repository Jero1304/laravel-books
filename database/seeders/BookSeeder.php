<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Book;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $genre_ids = Genre::all()->pluck('id');
        for ($i = 0; $i < 50; $i++) {
            $book = new Book;

            $book->titolo=$faker->unique()->text(50);
            $book->autore=$faker->name(30);
            $book->casa_editrice=$faker->text(50);
            $book->isbn=$faker->numerify('#############');
            $book->copie=$faker->numberBetween(100,1000);
            $book->pagine=$faker->numberBetween(100,1000);
            $book->genre_id=$faker->randomElement($genre_ids);
            
            $book->save();
            
        }
    }
}