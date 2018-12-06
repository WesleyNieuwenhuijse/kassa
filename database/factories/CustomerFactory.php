<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'id' => $faker->randomElement($userId),
        'name' => $faker->name(),

    ];
});
