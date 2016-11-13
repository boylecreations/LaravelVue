<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'project' => $faker->name,
        'client' => $faker->name,
        'client_url' => $faker->url,
        'client_thumb' => $faker->imageUrl($width = 640, $height = 480),
        'client_feature' => $faker->imageUrl($width = 800, $height = 600)
    ];
});
