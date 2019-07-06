<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailConfirm extends Model
{
    protected $table = 'email_confirm';

    protected $fillable = [
        'uid', 'confirm_token', 'expired'
    ]; 

    public function user()
    {
        return $this->belongsTo('App\User', 'uid'); 
    }
}
