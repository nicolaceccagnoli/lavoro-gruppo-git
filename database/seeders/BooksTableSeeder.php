<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //azzero il db
        Book::truncate();
        for ($i = 0; $i < 25; $i++) {
            
            $Book = new Book();
            // Ne riempio le colonne
            $Book->title = fake()->word();
            $Book->author = "Stazione di ".fake()->word();
            $Book->year = "Stazione di ".fake()->word();
            $Book->genre = fake()->time();
            $Book->page= fake()->time();
            $Book->description=fake()->randomNumber(4, false);
            $Book->is_avaible=fake()->numberBetween(6, 25);

            // Lo salvo in persistenza
            $Book->save();
        }
    }
}
