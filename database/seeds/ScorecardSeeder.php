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
        foreach (\App\Models\Match::where('match_date', '<', Carbon\Carbon::now())->get() as $match) {
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
            $awayTeam = $match->awayTeam;
            $hometeamPlayers = $hometeam->players()->limit(11)->get();

            // 6 the allrounder, 7 keepers, 8 to 11 bowlers
            $awayTeamIds = $awayTeam->players->pluck('id')->toArray();
            $bowlerIds = [$awayTeamIds[5],$awayTeamIds[7],$awayTeamIds[8],$awayTeamIds[9], $awayTeamIds[10] ];
            $keeper = \App\Models\Player::find($awayTeamIds[6]);

            $nBatted = rand(4,11);
            $ctr = 0;
            foreach($hometeamPlayers as $player) {
                $ctr++;
                $runs = rand(0, 120);

                $bowler = \App\Models\Player::find($bowlerIds[array_rand($bowlerIds)]);
                $fielder = \App\Models\Player::find($awayTeamIds[array_rand($awayTeamIds)]);

                $factory = new \App\Factories\DismissalsFactory($match, $innings, $ctr, $runs, $player,
                    $bowler, #bowler
                    $fielder, #fielder,
                    null #balls faced
                );
                if ($ctr <= $nBatted) {
                    // potential for refactor here...
                    // @todo add rarer forms of dismissal
                    $random = rand(0,100);
                    if ($random < 20) {
                        $factory->bowled();
                    } elseif ($random < 65) {
                        $factory->caught();
                    } elseif ($random < 75) {
                        $factory->runOut();
                    } elseif ($random < 80) {
                        // need the keeper here
                        $factory = new \App\Factories\DismissalsFactory($match, $innings, $ctr, $runs, $player,
                            $bowler, #bowler
                            $keeper,
                            null #balls faced
                        );
                        $factory->stumped();
                    } elseif ($random < 90) {
                        $factory->runOut();
                    } elseif ($random<100) {
                        $factory->legBeforeWicket();
                    }

                } else {
                    $factory->didNotBat();
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
