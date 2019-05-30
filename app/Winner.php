<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $table = 'winner';
    
    protected $fillable = [
        'uid', 'pid', 'address', 'message'
    ];
}
