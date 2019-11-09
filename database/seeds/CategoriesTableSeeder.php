<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Chung cư'
        ]);
        DB::table('categories')->insert([
            'category' => 'Nhà dân'
        ]);
        DB::table('categories')->insert([
            'category' => 'Chung cư mini'
        ]);
        DB::table('categories')->insert([
            'category' => 'Nhà ở'
        ]);
    }
}
