<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\User;
use App\Product;

class UserAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function index()
    {
        $user = Auth::user(); 
        $auctions = $user->products()->orderBy('auction.created_at', 'desc')->paginate(3);
        $winners = $user->winner_product()->orderBy('created_at', 'desc')->paginate(3);
        //dd($winners);
		return view('user.account', compact('user', 'auctions', 'winners') );
    }
    public function create()
    {
    	return view('EndBiddingDetail');
    }
    public function EndBidding(Request $request, Product $product)
    {
    	$user = Auth::user();
    	$att['name'] = $request->input('name');
    	$att['phone'] = $request->input('phone');
    	$att['address'] = $request->input('address');
    	$att['message'] = $request->input('message');
        if($product->winner()->count() > 0)
    	    $user->winner_product()->updateExistingPivot($product->id,$att);
        else 
            $user->winner_product()->attach($product->id,$att);
    	return redirect()->route('account');
    }
}
