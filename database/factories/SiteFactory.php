<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Site;
use Faker\Generator as Faker;

$factory->define(Site::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'address'=>$faker->word,
        'gps_coordinates'=>$faker->word,
        'product'=>$faker->word,
        'type_of_site'=>$faker->numberBetween(-1,2),
    ];
});
