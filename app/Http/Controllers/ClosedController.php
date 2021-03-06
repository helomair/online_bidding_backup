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
        $closed_products = Product::where('end_time', '<', $now_time)->orderBy('end_time', 'desc')->paginate(3);
        //dd($closed_products);
		//$temp = ( $closed_products->count() === 0 ) ?  0:1;
		foreach($closed_products as $closed_product){
			$winner = $closed_product->winner()->first();
			if($winner){
				$winners[$closed_product->id] = $winner->name;
			}else{
				$winners[$closed_product->id] = "Người chưa được đấu thầu"; //未有得標者
			}
        }

        foreach($closed_products as $product){
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

		if($closed_products->count() == 0)
		{
			$winners = '';
			$file_path = '';
		}
    	return view('user.closed', compact('closed_products','winners','file_path'));
    }
}
