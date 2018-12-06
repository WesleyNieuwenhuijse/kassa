<?php

use Faker\Generator as Faker;

$factory->define(App\Invoice::class, function (Faker $faker) {
   // $customer_id = User::pluck('id')->toArray();
    return [
        'id' => $faker->randomElement($userId),
        'paid' => $faker->boolean(),
    ];
});
