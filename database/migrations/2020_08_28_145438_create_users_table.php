<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id')->unique();
            $table->string('username');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->boolean('status')->default(false);
            $table->string('password');
            $table->string('cnic')->unique()->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('cnic_pic')->nullable();
            $table->string('bank_pic')->nullable();
            $table->string('cnic_file_status')->nullable();
            $table->string('bank_file_status')->nullable();
			$table->rememberToken();
			$table->timestamp('email_verified_at')->nullable();
			$table->timestamp('last_activity')->nullable();
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
