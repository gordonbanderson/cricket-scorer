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

$factory->define(App\Models\Ground::class, function (Faker $faker) {
    $point = new \Phaza\LaravelPostgis\Geometries\Point($faker->latitude, $faker->longitude);
    return [
        'name' => $faker->company . ' Ground',
        //'location' => $point
    ];
});
