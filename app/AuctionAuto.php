<?php

namespace App; 

use Illuminate\Database\Eloquent\Model; 

class AuctionAuto extends Model
{
    protected $table = 'auction_auto';

    protected $fillable = [
        'uid', 'pid', 'start_cost', 'end_cost', 'times'
    ];
}
