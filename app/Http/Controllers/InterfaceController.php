<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Auction;

class InterfaceController extends Controller
{
	public function index()
	{
		$product = Product::find(1);
    	$auctions = $product->users()->orderBy('auction.created_at', 'desc')->paginate(3);
    	$top_auction = $auctions[0];
		//print_r($top_auction);
    	return view('user.interface', compact('product','top_auction','auctions'));
		//return view('user.interface');
	}
    public function show(Product $product)
    {
    	$auctions = $product->users()->orderBy('auction.created_at', 'desc')->paginate(3);
    	$top_auction = $auctions[0];
    	return view('user.interface', compact('product','top_auction','auctions'));
    }
}
