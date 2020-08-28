<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_account_id');
            $table->string('balance_type');
            $table->string('credit_debit');
            $table->integer('amount');
            $table->integer('old_balance');
            $table->integer('new_balance');
            $table->longText('transactions_details');
            $table->timestamps();

			$table->foreign('user_account_id')
				->references('account_id')
				->on('users')
				->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
