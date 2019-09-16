<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    //
    protected $table = "buyer";
    public $timestamps = false;
    protected $fillable = [
        'name', 'detail'
    ];
}
