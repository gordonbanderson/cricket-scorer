<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    protected $table = 'grounds';

    protected $fillable = [
        'name',
        'description',
        'location'
    ];
}
