<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Membership;
use Faker\Generator as Faker;

$factory->define(Membership::class, function (Faker $faker) {
    return [
        'user_account_id' => factory(\App\UserAccount::class),
        'name' => $faker->name,
    ];
});
