<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Bulletin; 
use Illuminate\Support\Facades\File;
use Carbon\Carbon; 

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::where('view_time','<=',Carbon::now())->where('end_time','>=',Carbon::now())->paginate(3);
        $bulletins = Bulletin::where('on','1')->get();
        $now_time = Carbon::now();
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
        return view('index', compact('products','file_path','bulletins','now_time')); 
    }

	public function getImg($file_path)
	{
		//dd($file_path);
		$file_path = str_replace('&','/',$file_path); //斜線不可以在URL中傳
		//echo $file_path;
		$file = File::get($file_path);
		$type = File::mimeType($file_path);
		//echo $type;

		return response($file)->header("Content-Type", $type);
	}
}
