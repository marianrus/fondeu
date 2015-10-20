<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses',function(Blueprint $table){
            $table->increments('id');

            $table->string('course_name')->index();
            $table->text('course_description');
            $table->date('course_from');
            $table->date('course_to');

            $table->string('duration');

            $table->integer('picture_id');

            $table->string('address');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('city_id')->on('city');

            $table->integer('county_id')->unsigned();
            $table->foreign('county_id')->references('county_id')->on('county');

            $table->integer('partner_id')->unsigned();
            $table->foreign('partner_id')->references('partner_id')->on('partner');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courses');
    }
}
