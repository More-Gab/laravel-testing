<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    // this fillable property is like a white list
    // able to fill - mass fill
    protected $fillable = [
        'title',
        'year',
        'plot'
    ];

    // this guarded property is like a black list
    // unable to fill
    protected $guarded = [
        'id'
    ];
}
