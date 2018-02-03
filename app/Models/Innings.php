<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Innings extends Model
{
    protected $table = 'innings';

    protected $fillable = [
        'scorecard_id',
        'order',
        // @todo team_id?
        ];
}
