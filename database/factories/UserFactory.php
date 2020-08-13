<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'mobile_no'=> '0700200200',
        'country'=> '200',
        // 'mobile_verify_code'=>
        'image'=> 'image location',
        'user_role' => 1,
        // 'user_code'=>
        // 'verify_code'=>
        // 'mobile_verify_at'=>
        // 'type_id'=>
        'verify_password'=> 0,
        'from_api'=> 0
    ];
});
