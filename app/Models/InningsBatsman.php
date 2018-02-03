<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class InningsBatsman extends Model
{
    protected $table = 'innings_batsman';

    protected $fillable = [
        'batsman_id',
        'position',
        'time_start',
        'time_finish',
        'how_out',
        'fielder_id',
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
        return $this->belongsTo('App\Models\Player', 'fielder_id');
    }

    public function bowler()
    {
        return $this->belongsTo('App\Models\Player', 'bowler_id');
    }

    public function batsman()
    {
        return $this->belongsTo('App\Models\Player', 'batsmanid');
    }

}
