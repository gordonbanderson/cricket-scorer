<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    const NUMBER_OF_CLUBS = 50;
    const NUMBER_OF_COMPETITIONS = 5;
    const NUMBER_OF_GROUNDS = 25;
    const NUMBER_OF_LEAGUES = 10;
    const NUMBER_OF_TEAMS = 100;
    const NUMBER_OF_PLAYERS = 2000;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GroundsTableSeeder::class,
            CompetitionsTableSeeder::class,
            ClubsTableSeeder::class,
            LeaguesTableSeeder::class,
            TeamsTableSeeder::class,
            PlayersTableSeeder::class,
            ScorecardSeeder::class,
        ]);
    }
}
