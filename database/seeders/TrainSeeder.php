<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i = 0; $i < 1000; $i++) {
            $train = new Train();
            $partenza = $faker->dateTimeBetween('now', '+1 month');
            $arrivo = $faker->dateTimeInInterval($partenza, '+2 days');
            $randomValue = $faker->randomElement(['in_orario', 'in_ritardo', 'cancellato']);

            $train->azienda = $faker->company;
            $train->stazione_di_partenza = $faker->city;
            $train->stazione_di_arrivo = $faker->unique()->city;
            $train->data_di_partenza = $partenza->format('Y-m-d H:i:s');
            $train->data_di_arrivo = $arrivo->format('Y-m-d H:i:s');
            $train->codice_treno = $faker->bothify('??######');
            $train->numero_carrozze = $faker->numberBetween(6, 20);
            $train->in_orario = $randomValue === 'in_orario';
            $train->in_ritardo = $randomValue === 'in_ritardo';
            $train->cancellato = $randomValue === 'cancellato';

            $train->save();
        }
    }
}
