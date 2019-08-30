<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(\App\LocationData::class, function (Faker $faker) {
    $min = 1;
    $max = \App\Location::all()->count();
    return [
        'location'      => $faker->numberBetween($min, $max),
        'name'          => $faker->name(),
        'surname'       => $faker->lastName,
        'parent_name'   => $faker->name(),
        'parent_surname'=> $faker->lastName,
        'birth_year'    => $faker->numberBetween(1990, \Carbon\Carbon::now()->year),
        'weight'        => $faker->numberBetween(40, 120),
        'height'        => $faker->numberBetween(120, 220),
        'phone'         => $faker->numberBetween(1000000, 9000000),
        'email'         => $faker->email,
        'paid'          => false,
        'newsletter'    => $faker->boolean(25)
    ];
});
