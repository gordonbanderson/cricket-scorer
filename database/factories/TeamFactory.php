<?php

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

$factory->define(App\Models\Team::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph(),

        // these will get overwritten later
        'name' => $faker->city . ' ' . $faker->jobTitle .'s Cricket Club',
        'club_id' => 1,
        'league_id' => 1,
        'home_ground_id' => 1
    ];
});
