<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
	public $timestamps = false;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// DB::table('roles')->truncate();
		DB::statement('DELETE FROM users');
		Role::create([
			'privilege'=>'user'
		]);
		
		Role::create([
			'privilege'=>'gestionnaire'
		]);
		
		Role::create([
			'privilege'=>'admin'
		]);
    }
}
