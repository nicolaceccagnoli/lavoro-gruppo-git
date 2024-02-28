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
            $Book->author = fake()->word();
            $Book->year = fake()->date('Y-m-d');
            $Book->genre = fake()->word();
            $Book->page= fake()->randomNumber(3, false);
            $Book->description=fake()->paragraph();
            $Book->is_avaible=fake()->boolean();

            // Lo salvo in persistenza
            $Book->save();
        }
    }
}
