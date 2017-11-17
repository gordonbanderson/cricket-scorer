<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table = 'matches';

    protected $fillable = [
        'match_date',
        'home_team_id',
        'away_team_id',
        'league_id',
        'ground_id',
        'slug'
    ];

    protected $dates = [
      'match_date'
    ];

    public function league()
    {
        return $this->belongsTo('App\Models\League');
    }

    public function ground()
    {
        return $this->belongsTo('App\Models\Ground');
    }

    public function homeTeam()
    {
        return $this->belongsTo('App\Models\Team', 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo('App\Models\Team', 'away_team_id');
    }


    public function scorecard()
    {
        return $this->belongsTo('App\Models\Scorecard', 'scorecard_id');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['match_date', 'homeTeam.slug', 'awayTeam.slug'],
                'separator' => '_'
                ]
        ];
    }
}
