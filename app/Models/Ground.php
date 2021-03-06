<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    use Sluggable;

    protected $table = 'grounds';

    protected $fillable = [
        'name',
        'description',
        'location'
    ];

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

    public function matches()
    {
        return $this->hasMany('App\Models\Match');
    }
}
