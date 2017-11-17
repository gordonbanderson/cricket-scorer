<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class InningsBowler extends Model
{
    use Sluggable;

    protected $table = 'innings_batsman';

    protected $fillable = [
        'bowler_id',
        'position',
        'team_id',
        'match_id',
        'time_start',
        'time_finish',
        'overs',
        'balls',
        'maidens',
        'runs',
        'wickets',
        'wides',
        'no_balls'
    ];

    public function match()
    {
        return $this->belongsTo('App\Models\Match');
    }

    public function bowler()
    {
        return $this->belongsTo('App\Models\Player', 'bowler_id');
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
                'source' => 'position' // @todo Fix
            ]
        ];
    }
}
