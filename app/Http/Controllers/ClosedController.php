<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;

class ClosedController extends Controller
{
    public function index()
    {
    	$now_time = Carbon::now();
        $closed_products = Product::where('end_time', '<', $now_time)->paginate(3);
        //dd($closed_products);
		//$temp = ( $closed_products->count() === 0 ) ?  0:1;
		foreach($closed_products as $closed_product){
			$winner = $closed_product->winner()->first();
			if($winner){
				$winners[$closed_product->id] = $winner->name;
			}else{
				$winners[$closed_product->id] = "未有得標者";
			}
		}
    	return view('user.closed', compact('closed_products','winners'));
    }
}
