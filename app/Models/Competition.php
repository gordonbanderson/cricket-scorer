<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table = 'competitions';

    protected $fillable = [
        'name',
        'description'
    ];

    public function leagues()
    {
        return $this->hasMany('App\Models\League');
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
