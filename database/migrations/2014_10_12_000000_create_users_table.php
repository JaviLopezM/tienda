<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('user');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->string('postal');
            $table->string('locality');
            $table->string('name2');
            $table->boolean('verified')->default(false);
            $table->string('token')->nullable();
            $table->string('last_name2');
            $table->text('address2');
            $table->string('postal2');
            $table->string('locality2');
            $table->enum('role',['user','admin'])->default('user');
            $table->string('active');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
