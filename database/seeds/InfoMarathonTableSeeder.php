<?php

use Illuminate\Database\Seeder;
use App\InfoMarathon;
class InfoMarathonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('es_AR');

        for ($i=0; $i < 50 ; $i++) {
          InfoMarathon::create([
            'title' => $faker -> name,
            'lat' => $faker -> unique()->latitude(-34.557089, -34.608501),
            'lng' => $faker -> unique()->longitude(-58.426887,-58.498997),
            'description' => $faker -> text($maxNbChars = 30),
            'img' => $faker -> imageUrl($width = 640, $height = 480),
            'subscribe_link' => $faker-> text($maxNbChars = 10)
          ]);
        }
    }
}
