<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\User;
use App\AuctionAuto;
use Carbon\Carbon;
use Validator; 

class BiddingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function index(Product $product)
    {
    	return view('user.bidding',compact('product'));
    }

    public function store(Request $request, Product $product)
    {
        $user = Auth::user();
        $userID = Auth::id(); 
        $now_time = Carbon::now();
    	//$bid_cost = $request->input('bid_cost');

    	if( $user->balance > 0 )
    	{
            $data = [
                'cost' => $product->cost, 
    			'lasted_cost' => $product->cur_cost + $product->cost,
            ];

    		$product->users()->attach($userID,$data);
            $product->update( [
                'cur_cost' => $data['lasted_cost'] ,
                'uid'      => $user->id
            ]);
            $user->update(['balance' => $user->balance - 1 ]); 

            $count_down = $product->end_time->diffInSeconds($now_time, false);
            if( ($count_down < 0 && $count_down >= (-30)) && $now_time->gte($product->start_time) )
            	$product->update(['end_time' => $product->end_time->addSeconds(20)]);
        }
        return redirect()->back()->with(['msg' => '下標成功']); 
    }

    public function storeAuto(Request $request, Product $product)
    {
        $validate = Validator::make($request->all(),[
            'start_cost' => 'required|integer',
            'stop_cost' => 'required|integer',
            'times' => 'required|integer'
        ]); 
        
        if($validate->fails())
            return back()->witherrors($validate)->withInput(); 

        $user = Auth::user();
        $auto = $product->users(true)->where('uid', $user->id)->first();
    	$start_cost = $request->input('start_cost');
    	$stop_cost = $request->input('stop_cost');
        $times = $request->input('times');

        $data_auto = [
                'start_cost' => $start_cost,
                'end_cost'   => $stop_cost,
                'times'      => $times
        ];
        if($start_cost >= 0 && $stop_cost && $start_cost < $stop_cost)
        {
        	if($auto == null)
        		$product->users(true)->attach($user->id,$data_auto);
            else
                $auto->pivot->update($data_auto);
        }
    	return redirect()->route('user_interface.show',$product->id);
    }

    public function deleteAuto(Product $product)
    {
        $user = Auth::user();
        $auto = AuctionAuto::where('uid',Auth::id())->where('pid',$product->id)->get()->first();
        if($auto != null)
            $auto->delete();
        return redirect()->route('user_interface.show',$product->id);
    }
}
