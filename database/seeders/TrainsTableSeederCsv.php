<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainsData = $this->getCsvData(__DIR__ . '/trains.csv');
        foreach ($trainsData as $key => $train) {
            if ($key !== 0) {
                $newTrain = new Train();
                $newTrain->azienda = $train[0];
                $newTrain->stazione_partenza = $train[1];
                $newTrain->stazione_arrivo = $train[2];
                $newTrain->codice_treno = $train[3];
                $newTrain->numero_carrozze = $train[4];
                $newTrain->cancellato = $train[5];
                $newTrain->in_orario = $train[6];
                $newTrain->orario_partenza = $train[7];
                $newTrain->orario_arrivo = $train[8];
                $newTrain->save();
            }
        }
    }

    public function getCsvData($path)
    {
        $data = [];
        $file_stream = fopen($path, 'r');
        if ($file_stream === false) {
            exit('cannot open file');
        };
        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }
        fclose($file_stream);
        return $data;
    }
}
