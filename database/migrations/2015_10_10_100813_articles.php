<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles',function(Blueprint $table){
            $table->increments('article_id');
            $table->string('article_name');
            $table->text('article_description');

            $table->integer('article_picture_id')->unsigned();
            $table->foreign('article_picture_id')->references('article_picture_id')->on('article_pictures');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category');

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
        Schema::drop('articles');
    }
}
