<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','realname', 'password', 
        'phone', 'on', 'nickname', 'recommand_code', 
        'balance', 'code', 'email_confirm',
        'fblogin_provider', 'fblogin_providerId' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * protected casts
     * @var array
     */


 
    /**
     * get Payment , 1 to many
     */
    public function payments()
    {
        return $this->hasMany('App\Payment','uid');
    }

    /**
     * get Product, many to many, using relationship Auction
     * @param mode, 1 is auto, 0 is not
     */
    public function products($mode = NULL)
    {
        if($mode)
            return $this->belongsToMany('App\Product','auction_auto','uid','pid')
                        ->withPivot('start_cost','end_cost','times')
                        ->withTimestamps();
        else
            return $this->belongsToMany('App\Product','auction','uid','pid')
                        ->withPivot('cost','lasted_cost')
                        ->withTimestamps();
    }

    public function winner_product()
    {
        return $this->hasMany('App\Product','uid');
    }
}
