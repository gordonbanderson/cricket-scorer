<?php

use Illuminate\Database\Seeder;

class CompetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Competition::class, DatabaseSeeder::NUMBER_OF_COMPETITIONS)->create();
    }
}
