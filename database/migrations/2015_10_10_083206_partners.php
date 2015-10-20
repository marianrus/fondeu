<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Partners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner', function(Blueprint $table){;
           $table->increments('partner_id');
           $table->string('partner_name');
           $table->string('partner_phone');
           $table->string('partner_phone2');

           $table->string('address');
           $table->integer('city_id')->unsigned();
           $table->foreign('city_id')->references('city_id')->on('city');

           $table->integer('county_id')->unsigned();
           $table->foreign('county_id')->references('county_id')->on('county');

           $table->string('partner_email');
           $table->string('partner_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partner');
    }
}
