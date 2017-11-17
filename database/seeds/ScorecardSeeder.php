<?php

use Illuminate\Database\Seeder;

class ScorecardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for now 2 innings
        /**
         * @param $match \App\Models\Match
         */
        foreach (\App\Models\Match::all() as $match) {
            $scorecard = \App\Models\Scorecard::create([
                'match_id' => $match->id
            ]);

            // hometeam innings
            $innings = \App\Models\Innings::create([
                'scorecard_id' => $scorecard->id,
                'order' => 1
            ]);

            /** @var \App\Models\Team $hometeam */
            $hometeam = $match->homeTeam;
            $players = $hometeam->players()->limit(11)->get();
            $nBatted = rand(4,11);
            $ctr = 0;
            foreach($players as $player) {
                $ctr++;
                error_log('SC: ' . $player->name );
                $battingInnings = \App\Models\InningsBatsman::create([
                    'batsman_id' => 'player_id',
                    'position' => $ctr,
                    'team_id' => $hometeam->id,
                    'match_id' => $match->id,
                    'time_start' => null,
                    'time_finished' => null,
                    ]);
                if ($ctr <= $nBatted) {

                } else {
                    // did not bat
                }

                /*
                 *  id                    | integer                        | not null default nextval('innings_batsman_id_seq'::regclass)
 created_at            | timestamp(0) without time zone |
 updated_at            | timestamp(0) without time zone |
 batsman_id            | integer                        | not null
 position              | integer                        | not null
 team_id               | integer                        | not null
 match_id              | integer                        | not null
 time_start            | timestamp(0) without time zone |
 time_finished         | timestamp(0) without time zone |
 assisting_player_id   | integer                        |
 bowler_id             | integer                        |
 dismissable_method_id | integer                        |
 runs                  | integer                        | not null
 balls_faced           | integer                        |
 innings_id            | integer                        | not null

                 */
            }


        }
    }
}
