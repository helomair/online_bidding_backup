<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Carbon\Carbon;

class BiddingController extends Controller
{
    public function index(Product $product)
    {
    	return view('user.bidding',compact('product'));
    }

    public function store(Request $request, Product $product)
    {
    	$userID = Auth::id();
    	$bid_cost = $request->input('bid_cost');
    	$start_cost = $request->input('start_cost');
    	$stop_cost = $request->input('stop_cost');
    	$times = $request->input('times');
    	$now_time = Carbon::now();

    	if($bid_cost > $product->cur_cost)
    	{
    		$data = [
    			'cost' => $bid_cost - $product->cur_cost,
    			'lasted_cost' => $bid_cost
    		];
    		$product->users()->attach($userID,$data);
    		$product->update(['cur_cost' => $bid_cost]);
    		$count_down = $now_time->diffInSeconds($product->end_time,false);
            if( ($count_down < 0 && $count_down >= (-10)) && $now_time->gte($product->start_time) )
            	$product->update(['end_time' => $product->end_time->addSeconds(20)]);
    	}

    	if($start_cost && $stop_cost && $start_cost < $stop_cost)
    	{
    		$data_auto = [
    			'start_cost' => $start_cost,
    			'end_cost' 	 => $stop_cost,
    			'times' 	 => $times
    		];
    		$product->users(true)->attach($userID,$data_auto);
    	}

    	return redirect()->route('user_interface');
    }
}
