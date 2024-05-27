<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 50; $i ++) {
            $train = new Train();

            $train->Azienda = ;
            $train->Stazione_di_partenza = ;
            $train->Stazione_di_arrivo = ;
            $train->Orario_di_partenza = ;
            $train->Orario_di_arrivo = ;
            $train->Codice_Treno = ;
            $train->Numero_Carrozze = ;
            $train->In_orario = ;
            $train->Cancellato = ;
        }
    }
}
