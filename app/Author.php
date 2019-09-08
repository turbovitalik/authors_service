<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Author extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gender',
        'country',
    ];
}
