<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pin;
use Faker\Generator as Faker;

$factory->define(Pin::class, function (Faker $faker) {
    return [
        'user_account_id' => factory(\App\UserAccount::class),
        'amount' => $faker->numberBetween(-10000, 10000),
        'acutal_pin' => $faker->word,
    ];
});
