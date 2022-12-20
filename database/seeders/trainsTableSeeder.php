<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new Train();
        $newTrain->azienda = $faker->company();
        $newTrain->stazione_partenza = $faker->city();
        $newTrain->stazione_arrivo = $faker->city();
        $newTrain->codice_treno = $faker->bothify('???##??##?###');
        $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
        $newTrain->cancellato = $faker->numberBetween(0, 1);
        $newTrain->in_orario = $faker->numberBetween(0, 1);
        $newTrain->orario_partenza = $faker->dateTimeThisYear();
        $newTrain->orario_arrivo = $faker->dateTimeThisYear();
        $newTrain->save();
    }
}
