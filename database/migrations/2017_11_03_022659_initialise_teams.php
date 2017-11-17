<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialiseTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->default('');
            $table->timestamps();

            $table->integer('club_id')->unsigned();
            $table->foreign('club_id')->references('id')->on('clubs');

            $table->integer('home_ground_id')->unsigned();
            $table->foreign('home_ground_id')->references('id')->on('grounds');

            $table->integer('league_id')->unsigned();
            $table->foreign('league_id')->references('id')->on('leagues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
