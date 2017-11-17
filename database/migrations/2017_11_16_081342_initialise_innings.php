<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialiseInnings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('scorecard_id')->unsigned();
            $table->integer('order')->unsigned();

            // foreign keys
            $table->foreign('scorecard_id')->references('id')->on('scorecards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('innings');
    }
}
