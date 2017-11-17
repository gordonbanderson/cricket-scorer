<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use Sluggable;

    protected $table = 'players';

    protected $fillable = [
        'name',
        'profile',
        'image_url'
    ];

    public function teams()
    {
        return $this->belongsToMany('\App\Models\Team');
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
