<?php

namespace App\Http\Controllers\Cricket;

use App\Models\Competition;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CompetitionsController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index()
    {
        $competitions = Competition::orderBy('name')->paginate(20);
        return view('competitions.index', ['competitions' => $competitions]);
    }

    function show($id)
    {
        $competition = Competition::findBySlug($id);
        return view('competitions.show', ['competition' => $competition]);
    }
}
