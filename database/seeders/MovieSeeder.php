<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models

use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Movie::truncate();

        for ($i = 0; $i < 10; $i++) {
            // Istanzio il model
            $movie = new Movie();

            // Ne riempio le colonne
            $movie->title = fake()->words(3, true);
            $movie->original_title = fake()->words(3, true);
            $movie->date = fake()->date();
            $movie->language = fake()->word();
            $movie->duration = fake()->time();
            
            // Lo salvo in persistenza
            $movie->save();
        }

    }
}
