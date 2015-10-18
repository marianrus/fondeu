<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EuProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eu_project',function(Blueprint $table){
            $table->increments('eu_project_id');
            $table->integer('eu_project_type_id');

            $table->foreign('eu_project_type_id')
                ->references('eu_project_type_id')
                ->on('eu_project_type')
                ->onDelete('cascade');

            $table->string('eu_project_name');
            $table->string('eu_project_description');
            $table->date('started_at');
            $table->date('ends_at');
            $table->string('eu_project_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eu_project');
    }
}
