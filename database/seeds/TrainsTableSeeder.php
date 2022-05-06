<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newTrain= new Train();
            $newTrain->azienda=$faker->company();
            $newTrain->stazione_di_partenza;
            $newTrain->stazione_di_arrivo;
            $newTrain->date;
            $newTrain->orario_di_partenza;
            $newTrain->orario_di_arrivo;
            $newTrain->code;
            $newTrain->nr_carrozze;
            $newTrain->on_time;
            $newTrain->canceled;
            $newTrain->save();
        }
    }
}
