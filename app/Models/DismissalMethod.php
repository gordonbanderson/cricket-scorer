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



    /*
     * default=# select * from dismissal_methods;
 id |     created_at      |     updated_at      | short_name |       long_name       | slug
----+---------------------+---------------------+------------+-----------------------+-------
  1 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | c          | caught                | c
  2 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | c&b        | caught and bowled     | c-b
  3 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | b          | bowled                | b
  4 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | st         | stumped               | st
  5 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | htb        | handled the ball      | htb
  6 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | otf        | obstructing the field | otf
  7 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | dnb        | did not bat           | dnb
  8 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | r/o        | run out               | r-o
  9 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | r/h        | retired hurt          | r-h
 10 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | r/o        | leg before wicket     | r-o-1
 11 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | hw         | hit wicket            | hw
 12 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | hbt        | hit the ball twice    | hbt
 13 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | t/o        | timed out             | t-o
 14 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | n/o        | not out               | n-o
 15 | 2017-11-16 14:59:38 | 2017-11-16 14:59:38 | dnb        | did not bat           | dnb-1
(15 rows)

     */

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
