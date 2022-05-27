<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Models\Holiday;

class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i=0; $i<10; $i++){

        $newHoliday = new Holiday();

            $newHoliday->nome = $faker->state();
            $newHoliday->destinazione = $faker->city();
            $newHoliday->costo = $faker->randomFloat(2, 10, 100 );
            $newHoliday->data_di_partenza = $faker->date();
            $newHoliday->data_di_ritorno = $faker->date();
            $newHoliday->tipo = $faker->words(3, true);
            $newHoliday->tipo_di_pensione = $faker->words(3, true);
            $newHoliday->tassa_di_soggiorno = $faker->boolean();

            $newHoliday -> save();

       }
    }


}
