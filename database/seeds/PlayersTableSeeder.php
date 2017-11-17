<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Player::class, DatabaseSeeder::NUMBER_OF_PLAYERS)->create();

        // players unique per team
        // @todo multiple teams per player within a club
        $ctr = 0;
        foreach (\App\Models\Team::all() as $team) {
            for ($i = 0; $i < 20; $i++) {
                $ctr++;
                \App\Models\PlayerTeam::create([
                   'player_id' => $ctr,
                   'team_id' => $team->id
                ]);
            }


        }
    }
}
