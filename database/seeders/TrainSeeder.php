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

    $file = fopen(__DIR__ . "/../csv/train.csv", "r");

    $first_line = true;
    while (!feof($file)) {
      if (!$first_line) {
        // var_dump(fgetcsv($file)); //lo vedrai sul terminale facendo php artisan db:seed
        //step 1
        $train_data = fgetcsv($file);
        $train = new Train();

        //step 2
        $train->company = $train_data[0];
        $train->departure_station = $train_data[1];
        $train->arrival_station = $train_data[2];
        $train->departure_time = $train_data[3];
        $train->arrival_time = $train_data[4];
        $train->train_code = $train_data[5];
        $train->number_of_carriages = $train_data[6];
        // $train->on_time;
        // $train->cancelled;

        //step 3
        $train->save();
      }

      $first_line = false;
    }
  }
}
