<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMatches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('match_date');
            $table->integer('home_team_id')->unsigned();
            $table->integer('away_team_id')->unsigned();
            $table->integer('league_id')->unsigned();
            $table->integer('ground_id')->unsigned();
            $table->timestamps();

            $table->foreign('home_team_id')->references('id')->on('teams');
            $table->foreign('away_team_id')->references('id')->on('teams');
            $table->foreign('league_id')->references('id')->on('leagues');
            $table->foreign('ground_id')->references('id')->on('grounds');

            $table->string('slug', 255);
            $table->index('slug');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // @todo Indexes
        Schema::drop('matches');
    }
}
