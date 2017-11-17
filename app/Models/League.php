<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table = 'leagues';

    protected $fillable = [
        'name',
        'description'
    ];

    public function club()
    {
        return $this->belongsTo('App\Models\Competition');
    }

    public function matches()
    {
        return $this->hasMany('App\Models\Match');
    }

    public function teams()
    {
        return $this->hasMany('App\Models\Team');
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
