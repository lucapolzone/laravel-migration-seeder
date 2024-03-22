<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //for loop
        for ($i = 0; $i < 10; $i++) {
          //step 1
          $train = new Train();

          //step 2
          $train->company = $faker->text(50);
					$train->departure_station = "Milano";
					$train->arrival_station= "Roma";
					$train->departure_time;
					$train->arrival_time;
					$train->train_code;
					$train->number_of_carriages;
					$train->on_time;
					$train->cancelled;
           
          //step 3
          $train->save();
        }
				
    }
}
