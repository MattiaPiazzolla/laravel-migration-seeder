<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            
            $train->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Frecciarossa', 'Regionale', 'Regionale veloce']);
            $train->stazione_di_partenza = $faker->city;
            $train->stazione_di_arrivo = $faker->city;
            $train->orario_di_partenza = $faker->time($format = 'H:i:s');
            $train->orario_di_arrivo = $faker->time($format = 'H:i:s');
            $train->codice_treno = $faker->regexify('[A-Z0-9]{6}');
            $train->numero_carrozze = $faker->numberBetween(3, 12);
            $train->in_orario = $faker->boolean;
            $train->cancellato = $faker->boolean(20);
            
            $train->save();
        }
    }
}