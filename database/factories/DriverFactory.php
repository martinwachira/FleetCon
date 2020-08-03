<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use Faker\Generator as Faker;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'id_number'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'phone_number'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'driver_salary'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'load_bonus'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
    ];
});
