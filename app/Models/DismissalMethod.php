<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class DismissalMethod extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    const CAUGHT=1;
    const CAUGHT_AND_BOWLED=2;
    const BOWLED=3;
    const STUMPED=4;
    const HANDLED_THE_BALL=5;
    const OBSTRUCTING_THE_FIELD=6;
    const DID_NOT_BAT=7;
    const RUN_OUT=8;
    const RETIRED_HURT=9;
    const LBW=10;
    const HIT_WICKET=11;
    const HIT_THE_BALL_TWICE=12;
    const TIMED_OUT=13;
    const NOT_OUT=14;
    const RETIRED_OUT=15;

    protected $table = 'dismissal_methods';

    protected $fillable = [
        'short_name',
        'long_name',
        'slug'
    ];



    /**
     * Return the sluggable configuration array for this model.
     *
     * @return arra
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'short_name'
            ]
        ];
    }
}
