<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Route;
use Faker\Generator as Faker;
use App\Site;
$factory->define(Route::class, function (Faker $faker) {
    return [
        'loading_site'=>function(){
            return Site::all()->random();
        },
        'off_loading_site'=>function(){
            return Site::all()->random();
        },
        'distance'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'turn_around_time'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'possible_trips_per_month'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'rands'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'contract_quantity_per_month'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
    ];
});
