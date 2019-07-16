<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Auction;
use App\AuctionAuto; 
use Auth;
use Session; 

class InterfaceController extends Controller
{
	public function index()
    {
		//dd("cc"); 
        $products = Product::where('view_time','<=',Carbon::now())->where('end_time','>=',Carbon::now())->paginate(3);
        //先假設路徑為admin/index.blade.php
		foreach($products as $product){
			//先取得商品名
			$files = get_files(storage_path('app/public/products/'.$product->id));
			//$pics[$product->id] = $files;
			//取得完整路徑，並將路徑改寫，url會把 / 判定錯誤
			if($files != NULL)
			  $file_path[$product->id] = str_replace('/','&',storage_path('app/public/products/'.$product["id"].'/'.$files[0]));
			else
			  $file_path[$product->id] = '';
		  //echo $file_path[$product->id]."\n";
		}
		//如果沒有進行中拍賣，給file_path一個null防error
		if(!isset($file_path)) $file_path='';
        return view('user.all', compact('products','file_path')); 
	}
	
    public function show(Product $product)
    {
        $nowtime = Carbon::now(); 
        $auctions = $product->users()->orderBy('auction.created_at', 'desc')->paginate(3);
        $auction_auto = AuctionAuto::where('uid',Auth::id())->where('pid',$product->id)->get()->first();
		//dd($auctions);
		//print_r($auctions);
        if($this->check_auction_exist($product))  {
        	$top_auction = $auctions[0];
        }
        else  {
            $top_auction = new \stdClass();
            $top_auction->name = '';
        }
		
		if($auction_auto == null)
		{
			$auction_auto = new \stdClass();
			$auction_auto->start_cost = 'ex: 5000';
			$auction_auto->end_cost = 'ex: 15000';
			$auction_auto->times = 'ex: 10';
			$auction_auto->on = null;
		}
		else
			$auction_auto->on = true;

		//取得圖片
		$files = get_files(storage_path('app/public/products/'.$product->id));
		//$pics[$product->id] = $files;
		//取得完整路徑，並將路徑改寫，url會把 / 判定錯誤
		if($files != NULL)
		  $file_path = str_replace('/','&',storage_path('app/public/products/'.$product["id"].'/'.$files[0]));
		else
		  $file_path = '';
		//dd($top_auction);
        //echo $auction_auto;
    	return view('user.interface', compact('product','top_auction','auctions','file_path','nowtime','auction_auto'));
    }

    private function check_auction_exist(Product $product)
    {
        $temp = Auction::where('pid', $product->id)->get();
        if($temp->count() === 0)
            return 0;
        return 1;
    }
}
