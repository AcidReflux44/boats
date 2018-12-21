<?php

use App\Boat;
use Illuminate\Database\Seeder;

class BoatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('boats')->truncate();
		$faker=\Faker\Factory::create();
		
		foreach(range(1, 10) as $index){
			Boat::create([
				'nom'=>$faker->name,
				'modele'=>$faker->sentence(2),
				'longueur'=>$faker->randomFloat(2, 0, 15),
				'largeur'=>$faker->randomFloat(2, 0, 5),
				'date_construction'=>$faker->date(date('Y-m-d'))
			]);
		}
		
		/*non automatique*/
        // DB::table(’boats’)->truncate();
		// Boat::create([
			// ’nom’=>’teBoat’,
			// ’modele’=>’Benetaux Oceanis 35’,
			// ’longueur’=> 9.5,
			// ’largeur’=>3.5,
			// ’date_construction’=>’10/10/2010’
		// ]);
		// Boat::create([...]);
		// ......
    }
}
