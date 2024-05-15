<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains=
        [
            [
                'azienda' =>'frecciarossa',
                'stazione_di_partenza' => 'torino',
                'stazione_di_arrivo' => 'bologna',
                'orario_di_partenza' => '09:00:00',
                'codice_treno' => '44555',
                'numero_carrozze' => '11',
                'in_orario' => '1',
                'cancellato' => '0',
            ],
            [
                'azienda' =>'frecciablu',
                'stazione_di_partenza' => 'padova',
                'stazione_di_arrivo' => 'milano',
                'orario_di_partenza' => '14:00:00',
                'codice_treno' => '44665',
                'numero_carrozze' => '11',
                'in_orario' => '1',
                'cancellato' => '0',
            ],
            [
                'azienda' =>'frecciaverde',
                'stazione_di_partenza' => 'napoli',
                'stazione_di_arrivo' => 'modena',
                'orario_di_partenza' => '17:30:00',
                'codice_treno' => '44905',
                'numero_carrozze' => '11',
                'in_orario' => '1',
                'cancellato' => '0',
            ]
        ];

        foreach ($trains as $train) 
        {
            $newTrain = new Train();
            $newTrain -> azienda = $train['azienda'];
            $newTrain -> stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain -> stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain -> orario_di_partenza = $train['orario_di_partenza'];
            $newTrain -> codice_treno = $train['codice_treno'];
            $newTrain -> numero_carrozze = $train['numero_carrozze'];
            $newTrain -> in_orario = $train['in_orario'];
            $newTrain -> cancellato = $train['cancellato'];
            $newTrain -> save();
        }
    }
}
