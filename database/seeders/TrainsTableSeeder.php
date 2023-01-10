<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /*
        $table->string('brand', 50);
        $table->string('railway_station_start', 50);
        $table->string('railway_station_end', 50);
        $table->time('date_start');
        $table->time('date_end');
        $table->string('code', 20);
        $table->unsignedTinyInteger('number_wagons');
         $table->boolean('isDate');
        $table->boolean('isDeleted')->default(0);
        */
        for($i = 0; $i < 20; $i++){
            $new_train = new Train();
            $new_train->brand = $faker->word();
            $new_train->railway_station_start = $faker->word();
            $new_train->railway_station_end = $faker->word();
            $new_train->date_start = $faker->time();
            $new_train->date_end = $faker->time();
            $new_train->code = $faker->numerify('train-#####');
            $new_train->number_wagons = $faker->numberBetween(0, 255);
            $new_train->isDate = $faker->boolean();
            $new_train->save();
        }
    }
}
