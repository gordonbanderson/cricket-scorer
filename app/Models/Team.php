<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use Sluggable;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'description',
        'club_id',
        'league_id',
        'home_ground_id'
    ];

    public function club()
    {
        return $this->belongsTo('App\Models\Club');
    }

    public function homeGround()
    {
        return $this->belongsTo('App\Models\Ground', 'home_ground_id');
    }

    public function players()
    {
        return $this->belongsToMany('App\Models\Player', 'players_teams');
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
                'source' => 'name'
            ]
        ];
    }
}
