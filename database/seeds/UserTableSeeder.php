<?php

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
        $user = new \App\User();
        $user->name = 'Nurbapa Admin';
        $user->phone_number = '8-777-777-77-77';
        $user->email = 'admin@mail.ru';
        $user->password = bcrypt('password');
        $user->role_id = \App\Role::ADMIN_ID;
        $user->save();
    }
}
