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
    // public function run(Faker $faker)
    public function run()
    { 

        $trains_data = [
          [
            "company" => "Trenitalia",
            "departure_station" => "Milano",
            "arrival_station" => "Roma",
            "departure_time" => "13:03:00",
            "arrival_time" => "17:03:00",
            "train_code" => "3652729",
            "number_of_carriages" => 7
          ],
          [
            "company" => "Trenitalia",
            "departure_station" => "Genova",
            "arrival_station" => "Milano",
            "departure_time" => "06:03:00",
            "arrival_time" => "09:03:00",
            "train_code" => "4652727",
            "number_of_carriages" => 8
          ]
        ];

        foreach ($trains_data as $train_data) {

          //step 1
          $train = new Train();

          //step 2
          // $train->company = $faker->text(50);

          $train->fill($train_data);

          // $train->company = $train_data['company'];
          // $train->departure_station = $train_data['departure_station'];
          // $train->arrival_station= $train_data['arrival_station'];
          // $train->departure_time= $train_data['departure_time'];
          // $train->arrival_time= $train_data['arrival_time'];
          // $train->train_code= $train_data['train_code'];
          // $train->number_of_carriages= $train_data['number_of_carriages'];
          // $train->on_time;
          // $train->cancelled;
            
          //step 3
          $train->save();
        }
				
    }
}
