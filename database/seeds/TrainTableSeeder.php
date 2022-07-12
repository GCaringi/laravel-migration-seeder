<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train; 


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
         
        for ($i = 0; $i < 30; $i++){
            
            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->date('Y-m-d');
            $train->arrival_time = $faker->date('Y-m-d');
            $train->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}[A-Z]{3}');
            $train->wagon = $faker->numberBetween(0,100);
            $train->save();
        }
    }
}

