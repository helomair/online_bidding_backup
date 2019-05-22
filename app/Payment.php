<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    	'uid', 'amount', 'method'
    ];

    public function users()
    {
    	return $this->belongsTo('App\User','uid');
    }
}
