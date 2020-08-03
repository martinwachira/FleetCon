<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory('App\Driver',5)->create();
        factory('App\Site',5)->create();
        factory('App\Route',5)->create();
        factory('App\Truck',5)->create();
    }
}
