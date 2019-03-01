<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $pasword;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $pasword ?: $pasword = bcrypt('secret'), // secret
        'remember_token' => str_random(10),
    ];
});
