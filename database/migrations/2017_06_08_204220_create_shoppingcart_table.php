<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingcartTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shoppingcart', function (Blueprint $table) {

            $table->increments('id');
            $table->string('identifier')->index();
            $table->string('instance')->index();
            $table->longText('content');
            $table->timestamps();

            //$table->primary(['identifier']);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('shoppingcart');
    }
}
