<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('project', 255);
            $table->string('client', 255);
            $table->string('client_url', 255);

            $table->string('client_thumb', 255);
            $table->string('client_feature', 255);

            //$table->string('client_excerpt', 2500);
            //$table->string('client_content', 2500);

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
        Schema::drop('projects');
        //Schema::table('projects', function (Blueprint $table) {
            //Drop table
            //Schema::dropIfExists('projects');
        //});
    }
}
