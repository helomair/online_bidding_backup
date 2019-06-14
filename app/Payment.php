<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    	'uid', 'bid', 'amount', 'user_account'
    ];

    public function users()
    {
    	return $this->belongsTo('App\User','uid');
    }

    public function bank_account()
    {
        return $this->belongsTo('App\BankAccount','bid'); 
    }
}
