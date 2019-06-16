<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Auction extends Model
{
	protected $table = 'auction';
    
    protected $fillable = [
    	'uid', 'pid', 'cost', 'lasted_cost',
    ];


    public function product()
    {
        return $this->belongsTo('App\Product','pid');
    }
}
