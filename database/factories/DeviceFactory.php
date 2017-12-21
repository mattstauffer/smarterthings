<?php

use Faker\Generator as Faker;

$factory->define(App\Device::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraph,
        'website' => $faker->url,
    ];
});
