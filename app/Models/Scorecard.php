<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scorecard extends Model
{
    protected $table = 'scorecards';

    protected $fillable = [
        'match_id'
    ];

    public function innings()
    {
        return $this->hasMany('App\Models\Innings');
    }
}
