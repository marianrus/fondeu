<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class City extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city',function(Blueprint $table){
           $table->increments('city_id');
           $table->integer('county_id')->unsigned();
           $table->string('longitude');
           $table->string('latitude');
           $table->string('city_name');
           $table->string('region');
           $table->string('siruta');
           $table->foreign('county_id')->references('county_id')->on('county');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('city');
    }
}
