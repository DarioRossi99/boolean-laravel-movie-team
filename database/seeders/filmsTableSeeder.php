<?php

namespace Database\Seeders;

use App\Models\film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class filmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for ($i = 0; $i < 30; $i++) {
            $film = new film();
            $film->titolo = $faker->state();
            $film->lingua = $faker->word();
            $film->lingua_originale = $faker->word();
            $film->data_rilascio = $faker->date();
            $film->attore_protagonista = $faker->firstNameMale();
            // Salva in modo permanente all'interno del DB, l'elemento appena creato
            $film->save();
        }
    }
}
