<?php

namespace App; 

use Illuminate\Database\Eloquent\Model; 

class Bulletin extends Model
{
    protected $fillable = [
        'title', 'content', 'on'
    ]; 
}
