<?php

use App\User;
use App\Role;
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
        $user = User::create([
            'name' => 'manager',
            'email' => "manager@riji.com",
            'password' => bcrypt('manager')
        ]);

        Role::create([
            'user_id' => $user->id,
            'privilege' => 2
        ]);
    }
}
