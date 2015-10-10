<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EuProjectsType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eu_project_type',function(Blueprint $table){
            $table->integer('type_id')->unsigned()->unique();
            $table->string('eu_project_type_name');
            $table->text('eu_project_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eu_project_type');
    }
}
