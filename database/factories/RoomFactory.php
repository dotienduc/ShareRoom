<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'category_id' => rand(1,4),
        'city_id' => rand(1,10),
        'district_id' => function($contact){
            return App\District::find();
        }
    ];
});
