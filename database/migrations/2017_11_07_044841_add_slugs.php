<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clubs', function (Blueprint $table) {
            $table->string('slug', 255);
            $table->index('slug');
        });

        Schema::table('competitions', function (Blueprint $table) {
            $table->string('slug', 255);
            $table->index('slug');
        });

        Schema::table('grounds', function (Blueprint $table) {
            $table->string('slug', 255);
            $table->index('slug');
        });

        Schema::table('leagues', function (Blueprint $table) {
            $table->string('slug', 255);
            $table->index('slug');
        });

        Schema::table('players', function (Blueprint $table) {
            $table->string('slug', 255);
            $table->index('slug');
        });

        Schema::table('teams', function (Blueprint $table) {
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
        Schema::table('clubs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('competitions', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('grounds', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('leagues', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('players', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
