<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\DismissalMethod;

class AddDismissalMethods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dismissal_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('short_name', 3);
            $table->string('long_name', 30);
            $table->string('slug', 30);
        });

        DismissalMethod::create(['short_name' => 'c', 'long_name' => 'caught']);
        DismissalMethod::create(['short_name' => 'c&b', 'long_name' => 'caught and bowled']);
        DismissalMethod::create(['short_name' => 'b', 'long_name' => 'bowled']);
        DismissalMethod::create(['short_name' => 'st', 'long_name' => 'stumped']);
        DismissalMethod::create(['short_name' => 'htb', 'long_name' => 'handled the ball']);
        DismissalMethod::create(['short_name' => 'otf', 'long_name' => 'obstructing the field']);
        DismissalMethod::create(['short_name' => 'dnb', 'long_name' => 'did not bat']);
        DismissalMethod::create(['short_name' => 'r/o', 'long_name' => 'run out']);
        DismissalMethod::create(['short_name' => 'rth', 'long_name' => 'retired hurt']);
        DismissalMethod::create(['short_name' => 'lbw', 'long_name' => 'leg before wicket']);
        DismissalMethod::create(['short_name' => 'hw', 'long_name' => 'hit wicket']);
        DismissalMethod::create(['short_name' => 'hbt', 'long_name' => 'hit the ball twice']);
        DismissalMethod::create(['short_name' => 't/o', 'long_name' => 'timed out']);
        DismissalMethod::create(['short_name' => 'n/o', 'long_name' => 'not out']);
        DismissalMethod::create(['short_name' => 'rto', 'long_name' => 'retired out']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dismissal_methods');
    }
}
