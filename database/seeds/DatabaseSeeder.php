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
        // $this->call(CitiesTableSeeder::class);
        // $this->call(DistrictsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        // $this->call(StreetsTableSeeder::class);
    }
}
