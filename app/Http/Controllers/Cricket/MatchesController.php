<?php

namespace App\Http\Controllers\Cricket;

use App\Models\Competition;
use App\Models\League;
use App\Models\Match;
use Illuminate\Routing\Controller as BaseController;

class MatchesController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index($slugc, $slugl, $slugm)
    {
        $competition = Competition::findBySlug($slugc);
        $league = League::findBySlug($slugl);
        $match = Match::findBySlug($slugm);
        \Log::debug('SLUGC: ' . $slugc);
        \Log::debug('SLUGL: ' . $slugl);
        \Log::debug('SLUGLM: ' . $slugm);
        \Log::debug('MATCH: ' . $match);

        return view('matches.index', ['league' => $league, 'competition' => $competition, 'match' => $match]);
    }

}
