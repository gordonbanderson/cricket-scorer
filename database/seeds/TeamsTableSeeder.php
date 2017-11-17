<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Team::class, DatabaseSeeder::NUMBER_OF_CLUBS)->create();

        $ctr = 0;
        foreach(\App\Models\Team::all() as $team) {
            $ordinal = $ctr % DatabaseSeeder::NUMBER_OF_COMPETITIONS;
            $suffix = 'th';
            switch ($ordinal) {
                case 1:
                    $suffix = 'st';
                    break;
                case 2:
                    $suffix = 'nd';
                    break;
                case 3:
                    $suffix = 'rd';
                    break;
                default:
                    break;
            }

            $team->club_id = 1 + $ctr % DatabaseSeeder::NUMBER_OF_CLUBS;
            $team->league_id = 1 + $ctr % DatabaseSeeder::NUMBER_OF_LEAGUES;
            $team->home_ground_id = rand(1, DatabaseSeeder::NUMBER_OF_GROUNDS);
            $team->save();

            $team->name = $team->club->name . ' ' . $ordinal . $suffix . ' X1';
            $team->save();
            $ctr++;
        }

        // add matches to league
        foreach(\App\Models\League::all() as $league) {
            $teamIds = $league->teams->pluck('id');
            $nTeams = sizeof($teamIds);

            for ($i=0; $i < $nTeams; $i++) {
                for ($j=0; $j < $nTeams; $j++) {
                    if ($i != $j) {
                        $homeTeamId = $teamIds[$i];
                        $awayTeamId = $teamIds[$j];
                        $homeTeam = \App\Models\Team::find($homeTeamId);
                        $date = \Carbon\Carbon::now()->hour(11)->minute(0)->second(0)
                            ->addDays(rand(-50,50));

                        \App\Models\Match::create([
                            'home_team_id' => $homeTeamId,
                            'away_team_id' => $awayTeamId,
                            'league_id' => $league->id,
                            'ground_id' => $homeTeam->homeGround->id,
                            'match_date' => $date
                        ]);
                    }
                }
            }
        }
    }
}
