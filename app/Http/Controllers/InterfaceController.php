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
        if($this->check_auction_exist($product))  {
            $top_auction = $auctions[0];
        }
        else  {
            $top_auction = new \stdClass();
            $top_auction->name = '';
        }
    	return view('user.interface', compact('product','top_auction','auctions'));
		//return view('user.interface');
	}
    public function show(Product $product)
    {
        $auctions = $product->users()->orderBy('auction.created_at', 'desc')->paginate(3);

        if($this->check_auction_exist($product))  {
        	$top_auction = $auctions[0];
        }
        else  {
            $top_auction = new \stdClass();
            $top_auction->name = '';
        }
        //echo $top_auction;
    	return view('user.interface', compact('product','top_auction','auctions'));
    }

    private function check_auction_exist(Product $product)
    {
        $temp = Auction::where('pid', $product->id)->get();
        if($temp->count() === 0)
            return 0;
        return 1;
    }
}
