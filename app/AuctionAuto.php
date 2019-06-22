<?php

namespace App; 

use Illuminate\Database\Eloquent\Model; 
use App\Product; 
use App\User; 

class AuctionAuto extends Model
{
    protected $table = 'auction_auto';

    protected $fillable = [
        'uid', 'pid', 'start_cost', 'end_cost', 'times'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product','pid');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'uid'); 
    }
}
