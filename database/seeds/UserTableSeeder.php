<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::create([
            'name' => 'AAA',
            'email' => "aaa@aaa.com",
            'password' => bcrypt('aaa'),
			'role_id' => 1,
        ]);
    }
}
