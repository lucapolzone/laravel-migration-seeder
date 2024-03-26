<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Faker ↓
use Faker\Generator as Faker;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
          
      $file = fopen(__DIR__ . "/../csv/train.csv","r");
      while (!feof($file)) {
        var_dump(fgetcsv($file)); //lo vedrai sul terminale facendo php artisan db:seed
      }
        //step 1
        // $train = new Train();

        //step 2
        // $train->company = $faker->company();
        // $train->departure_station = $faker->address();
        // $train->arrival_station= $faker->address();
        // $train->departure_time= $faker->time();
        // $train->arrival_time= $faker->time();
        // $train->train_code= $faker->randomDigit();
        // $train->number_of_carriages= $faker->numberBetween(5, 9); //min, max
        // $train->on_time;
        // $train->cancelled;
          
        //step 3
        // $train->save();
    }
}
