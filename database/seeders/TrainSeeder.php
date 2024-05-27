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
        for ($i = 0; $i < 10000; $i++) {
            $train = new Train();
            $partenza = $faker->dateTimeBetween('now', '+1 month');
            $arrivo = $faker->dateTimeInInterval($partenza, '+2 days');
            $randomValue = $faker->randomElement(['In_orario', 'In_ritardo', 'Cancellato']);

            $train->Azienda = $faker->company;
            $train->Stazione_di_partenza = $faker->city;
            $train->Stazione_di_arrivo = $faker->unique()->city;
            $train->Data_di_partenza = $partenza->format('Y-m-d H:i:s');
            $train->Data_di_arrivo = $arrivo->format('Y-m-d H:i:s');
            $train->Codice_Treno = $faker->bothify('??######');
            $train->Numero_Carrozze = $faker->numberBetween(6, 20);
            $train->In_orario = $randomValue === 'In_orario';
            $train->In_ritardo = $randomValue === 'In_ritardo';
            $train->Cancellato = $randomValue === 'Cancellato';

            $train->save();
        }
    }
}
