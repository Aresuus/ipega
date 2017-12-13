<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class TableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('products', function (Blueprint $table) {
             $table->increments('id');
             $table->string('product');
             $table->string('name');
             $table->string('model');
             $table->string('description');
             $table->string('color');
             $table->string('properties');
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
        //
    }
}
