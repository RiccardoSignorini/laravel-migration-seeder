<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $train = new Train();
            $train->departure_to = $faker->randomElement(['Venezia', 'Milano', 'Torino', 'Roma', 'Napoli', 'Palermo']);
            $train->departure_time = $faker->dateTimeBetween('+1 hour', '+10 hours');
            $train->arrival_from = $faker->randomElement(['Venezia', 'Milano', 'Torino', 'Roma', 'Napoli', 'Palermo']);
            $train->arrival_time = $faker->dateTimeBetween('+1 hour', '+10 hours');
            $train->wagon_number = $faker->randomDigit();
            $train->save();
        }
    }
}
