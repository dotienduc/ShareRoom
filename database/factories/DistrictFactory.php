<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\District;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
    return [
        'district' => $faker->state,
        'city_id' => rand(1,10)
    ];
});
