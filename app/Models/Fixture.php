<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use Sluggable;

    protected $table = 'fixtures';

    protected $fillable = [
        'name',
        'description',
        'date',
        'ground_id',
        'league_id'
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
}
