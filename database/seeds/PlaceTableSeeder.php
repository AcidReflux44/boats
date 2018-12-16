<?php

use App\Place;
use Illuminate\Database\Seeder;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->truncate();
		$faker=\Faker\Factory::create();
		
		foreach(range(1, 10) as $index){
			Place::create([
				'nom-image'=>$faker->name,
				'longueur'=>$faker->randomFloat(4, 0, 600),
				'largeur'=>$faker->randomFloat(4, 0, 600),
				'tarif'=>$faker->randomFloat(4, 0, 600),
			]);
		}
    }
}
