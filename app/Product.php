<?php

namespace App; 

use Illuminate\Database\Eloquent\Model; 

class Product extends Model
{
    protected $fillable = [
        'name', 'detail', 'cost', 'cur_cost', 'view_time', 'start_time', 'end_time'
    ]; 
    
    /*
     * get User, many to many, using relationship Auction
     * @param mode, 1 is auto, 0 is not
     */
    public function users($mode)
    {
        if($mode)
            return $this->belongsToMany('App\User','auction_auto','pid','uid')
                        ->withPivot('start_cost','end_cost','times')
                        ->withTimestamps();
        else
            return $this->belongsToMany('App\User','auction','pid','uid')
                        ->withPivot('cost','lasted_cost')
                        ->withTimestamps();
    }
}