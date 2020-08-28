<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ad_power;
use Faker\Generator as Faker;

$factory->define(AdPower::class, function (Faker $faker) {
    return [
        'user_account_id' => factory(\App\UserAccount::class),
        'name' => $faker->name,
        'expires_at' => $faker->dateTime(),
        'amount' => $faker->numberBetween(-10000, 10000),
    ];
});
