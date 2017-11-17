<?php

namespace App\Http\Controllers\Cricket;

use App\Models\Competition;
use App\Models\League;
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

        return view('leagues.index', ['league' => $league, 'competition' => $competition]);
    }

}
