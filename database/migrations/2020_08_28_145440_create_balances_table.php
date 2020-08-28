<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_account_id');
            $table->integer('main_balance')->default(0);
            $table->integer('group_balance')->default(0);
            $table->integer('mall_balance')->default(0);
            $table->integer('ad_power_balance')->default(0);
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
        Schema::dropIfExists('balances');
    }
}
