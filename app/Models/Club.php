<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use Sluggable;

    protected $table = 'clubs';

    protected $fillable = [
        'name',
        'description',
    ];

    public function teams()
    {
        return $this->hasMany('App\Models\Team');
    }

    // @todo players

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
