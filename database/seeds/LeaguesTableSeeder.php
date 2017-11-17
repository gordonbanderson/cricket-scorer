<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        error_log('Leagues seeder');
        factory(App\Models\League::class, DatabaseSeeder::NUMBER_OF_CLUBS)->create();


    }
}
