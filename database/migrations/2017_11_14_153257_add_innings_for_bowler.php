<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInningsForBowler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innings_bowler', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('bowler_id')->unsigned();
            $table->integer('position')->unsigned();
            $table->integer('team_id')->unsigned(); // required?
            $table->integer('match_id')->unsigned();
            $table->timestamp('time_start')->unsigned()->nullable();
            $table->timestamp('time_finished')->unsigned()->nullable();

            $table->integer('overs')->unsigned();
            $table->integer('balls')->unsigned();
            $table->integer('maidens')->unsigned();
            $table->integer('runs')->unsigned();
            $table->integer('wickets')->unsigned();
            $table->integer('no_balls')->unsigned();
            $table->integer('wides')->unsigned();

            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('bowler_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('innings_bowler');

    }
}
