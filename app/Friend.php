<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Friend extends Eloquent
{
    protected $connection = 'mongodb';
    protected $fillable = ['name','age','color'];

}
