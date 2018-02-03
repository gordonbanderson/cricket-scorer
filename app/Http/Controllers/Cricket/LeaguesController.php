<?php

namespace App\Http\Controllers\Cricket;

use App\Models\Competition;
use App\Models\League;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class LeaguesController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index($slugc, $slugl)
    {
        $competition = Competition::findBySlug($slugc);
        $league = League::findBySlug($slugl);
        \Log::debug('SLUGC: ' . $slugc);
        \Log::debug('SLUGL: ' . $slugl);
        \Log::debug('LEAGUE: ' . $league);

        $results = $league->matches()->where('match_date', '<', Carbon::now());
        $fixtures = $league->matches()->where('match_date', '>=', Carbon::now());

        \Log::debug('N FIXTURES: ' . $fixtures->count());

        // @todo live

        return view('leagues.index', ['league' => $league, 'competition' => $competition, 'results' => $results,
            'fixtures' => $fixtures]);
    }

}
