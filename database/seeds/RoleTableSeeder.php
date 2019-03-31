<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = new \App\Role();
        $roleAdmin->name = 'Admin';
        $roleAdmin->save();

        $roleManager = new \App\Role();
        $roleManager->name = 'Manager';
        $roleManager->save();

        $roleClient = new \App\Role();
        $roleClient->name = 'Client';
        $roleClient->save();
    }
}
