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
        $products = Product::paginate(3);
        //先假設路徑為admin/index.blade.php
        return view('user.all', compact('products')); 
	}
    public function show(Product $product)
    {
    	$auctions = $product->users()->orderBy('auction.created_at', 'desc')->paginate(3);
    	$top_auction = $auctions[0];
    	return view('user.interface', compact('product','top_auction','auctions'));
    }
}
