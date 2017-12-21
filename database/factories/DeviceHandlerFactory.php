<?php

use Faker\Generator as Faker;

$factory->define(App\DeviceHandler::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'title' => $faker->sentence,
        'post' => $faker->paragraph,
        'discourse_url' => $faker->url,
    ];
});
