<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticlePictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_pictures',function(Blueprint $table){

           $table->integer('article_picture_id')->unsigned()->unique();
           $table->string('article_picture_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('article_pictures')){
            Schema::drop('article_pictures');
        }
    }
}
