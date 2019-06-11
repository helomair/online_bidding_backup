<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Auction;

class InterfaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
	public function index()
	{
        $products = Product::where('view_time','<=',Carbon::now())->paginate(3);
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
        return view('user.all', compact('products','file_path')); 
	}
    public function show(Product $product)
    {
        $auctions = $product->users()->orderBy('auction.created_at', 'desc')->paginate(3);
		//dd($auctions);
		//print_r($auctions);
        if($this->check_auction_exist($product))  {
        	$top_auction = $auctions[0];
        }
        else  {
            $top_auction = new \stdClass();
            $top_auction->name = '';
        }
		
		//取得圖片
		$files = get_files(storage_path('app/public/products/'.$product->id));
		//$pics[$product->id] = $files;
		//取得完整路徑，並將路徑改寫，url會把 / 判定錯誤
		if($files != NULL)
		  $file_path = str_replace('/','&',storage_path('app/public/products/'.$product["id"].'/'.$files[0]));
		else
		  $file_path = '';
		//dd($top_auction);
        //echo $top_auction;
    	return view('user.interface', compact('product','top_auction','auctions','file_path'));
    }

    private function check_auction_exist(Product $product)
    {
        $temp = Auction::where('pid', $product->id)->get();
        if($temp->count() === 0)
            return 0;
        return 1;
    }

	public function getImg($file_path)
	{
		$file_path = str_replace('&','/',$file_path); //斜線不可以在URL中傳
		//echo $file_path;
		$file = File::get($file_path);
		$type = File::mimeType($file_path);
		//echo $type;

		return response($file)->header("Content-Type", $type);
	}
	
}
