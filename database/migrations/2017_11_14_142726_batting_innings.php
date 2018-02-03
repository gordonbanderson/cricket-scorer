<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BattingInnings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innings_batsman', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('batsman_id')->unsigned();

            $table->integer('position')->unsigned();
            //$table->integer('team_id')->unsigned(); // required?
            //$table->integer('match_id')->unsigned(); @todo required?
            $table->timestamp('time_start')->unsigned()->nullable();
            $table->timestamp('time_finished')->unsigned()->nullable();
            $table->integer('fielder_id')->unsigned()->nullable();
            $table->integer('bowler_id')->unsigned()->nullable();
            $table->integer('dismissable_method_id')->unsigned()->nullable();

            $table->integer('runs')->unsigned();
            $table->integer('balls_faced')->unsigned()->nullable();

            //$table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('batsman_id')->references('id')->on('players');
            //$table->foreign('match_id')->references('id')->on('matches'); // @todo, needed - can go innings, scorecard, match
            $table->foreign('fielder_id')->references('id')->on('players');
            $table->foreign('bowler_id')->references('id')->on('players');
            $table->foreign('dismissable_method_id')->references('id')->on('dismissal_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('innings_batsman');
    }
}
