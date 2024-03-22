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
           $train = new Train(); 
           $train->company = $faker->text(50);
          
           

           $train->save();
        }
    }
}
