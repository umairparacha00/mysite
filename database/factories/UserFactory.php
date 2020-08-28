<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'account_id' => factory(\App\Account::class),
        'username' => $faker->userName,
        'full_name' => $faker->word,
        'email' => $faker->safeEmail,
        'email_verified_at' => $faker->dateTime(),
        'last_activity' => $faker->dateTime(),
        'status' => $faker->boolean,
        'password' => $faker->password,
        'cnic' => $faker->word,
        'date_of_birth' => $faker->date(),
        'phone' => $faker->phoneNumber,
        'gender' => $faker->word,
        'address' => $faker->word,
        'city' => $faker->city,
        'state' => $faker->word,
        'country' => $faker->country,
        'profile_pic' => $faker->word,
        'cnic_pic' => $faker->word,
        'bank_pic' => $faker->word,
        'cnic_file_status' => $faker->word,
        'bank_file_status' => $faker->word,
    ];
});
