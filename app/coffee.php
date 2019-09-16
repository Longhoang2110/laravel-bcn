<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coffee extends Model
{
    //
    protected $table = "coffee";
    public $timestamps = false;
    protected $fillable = [
        'name', 'detail'
    ];
}
