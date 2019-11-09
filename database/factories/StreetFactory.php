<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Street;
use Faker\Generator as Faker;

$factory->define(Street::class, function (Faker $faker) {
    return [
        'street' => $faker->streetName,
        'district_id' => rand(1,215)
    ];
});
