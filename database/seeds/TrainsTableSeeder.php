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
            $newTrain->stazione_di_partenza=$faker->city();
            $newTrain->stazione_di_arrivo=$faker->city();
            $newTrain->date=$faker->date();
            $newTrain->orario_di_partenza=$faker->time();
            $newTrain->orario_di_arrivo=$faker->time();
            $newTrain->code=$faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->nr_carrozze=$faker->randomDigitNotNull();
            $newTrain->on_time=$faker->numberBetween(0, 1);
            $newTrain->canceled=$faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
