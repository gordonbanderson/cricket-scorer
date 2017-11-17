<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PlayerTeam extends Model
{
    protected $table = 'players_teams';

    protected $fillable = [
        'player_id',
        'team_id'
    ];
}
