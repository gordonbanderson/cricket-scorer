<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInningsIdToBowlingAndBatting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('innings_batsman', function (Blueprint $table) {
            $table->integer('innings_id')->unsigned();
            $table->foreign('innings_id')->references('id')->on('innings');
        });

        Schema::table('innings_bowler', function (Blueprint $table) {
            $table->integer('innings_id')->unsigned();
            $table->foreign('innings_id')->references('id')->on('innings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('innings_batsman', function (Blueprint $table) {
            $table->dropColumn('innings_id');
        });

        Schema::table('innings_bowler', function (Blueprint $table) {
            $table->dropColumn('innings_id');
        });
    }
}
