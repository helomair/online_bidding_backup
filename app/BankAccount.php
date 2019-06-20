<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $table = 'bank_accounts';

    protected $fillable = [
        'account', 'bank_name', 'holder_name'
    ]; 

    public function payments()
    {
        return $this->hasMany('App\Payment','bid');
    }
}
