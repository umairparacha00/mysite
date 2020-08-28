<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'user_account_id' => factory(\App\UserAccount::class),
        'balance_type' => $faker->word,
        'credit_debit' => $faker->word,
        'amount' => $faker->numberBetween(-10000, 10000),
        'old_balance' => $faker->numberBetween(-10000, 10000),
        'new_balance' => $faker->numberBetween(-10000, 10000),
        'transactions_details' => $faker->text,
    ];
});
