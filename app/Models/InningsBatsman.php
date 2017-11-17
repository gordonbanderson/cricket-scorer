<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class InningsBatsman extends Model
{
    use Sluggable;

    protected $table = 'innings_batsman';

    protected $fillable = [
        'batsman_id',
        'position',
        'team_id',
        'match_id', #needed?
        'time_start',
        'time_finish',
        'how_out',
        'assisting_player_id',
        'bowler_id',
        'runs',
        'balls_faced',
        'innings_id'
    ];

    public function match()
    {
        return $this->belongsTo('App\Models\Match');
    }

    public function assistingPlayer()
    {
        return $this->belongsTo('App\Models\Player', 'assisting_player_id');
    }

    public function bowler()
    {
        return $this->belongsTo('App\Models\Player', 'bowler_id');
    }

    public function batsman()
    {
        return $this->belongsTo('App\Models\Player', 'batsmanid');
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
