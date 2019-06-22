<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Product;
use Storage;

class AdminProductController extends Controller
{
    //auth驗證是否登入 , is_adm驗證是否為Admin
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_adm');
    }

    // @return All Products
    public function index()
    {
		//$products = Product::all();
		//為了自動切分頁，更改了controller
        $products = Product::paginate(3);
		//取出現在時間
		$nowtime = Carbon::now();
		//將所有圖片取出
		//dd($products);
		foreach($products as $product){
			//先取得商品名
			$files = get_files(storage_path('app/public/products/'.$product->id));
			//$pics[$product->id] = $files;
			//取得完整路徑，並將路徑改寫，url會把 / 判定錯誤
			if($files != NULL)
			  $file_path[$product->id] = str_replace('/','&',storage_path('app/public/products/'.$product["id"].'/'.$files[0]));
			else
			  $file_path[$product->id] = '';
		}
        //先假設路徑為admin/index.blade.php
        return view('adm.Product', compact('products','file_path','nowtime')); 
    }

    /*
     * Show a product's detail
     * @param the product's pid
     * @return one product with id
     */
    public function show(Product $product)
    {
		//dd($products);
        return view('adm.Product', compact('product'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.CreateProduct');
    }
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carbon::createFromFormat('Y/m/d','1970/01/01')->timestamp;
		$att['name'] = $request->input('name');
        $att['view_time'] = $request->input('view_time');
		$att['start_time'] = $request->input('start_time');
		$att['end_time'] = $request->input('end_time');
		$att['detail'] = $request->input('detail');
		$att['cost'] = $request->input('cost');
		$att['cur_cost'] = $request->input('cur_cost');
        $att['origin_price'] = $request->input('origin_price');

        //更改型別
        $att['view_time'] = Carbon::parse($att['view_time'])->toDateTimeString();
        $att['start_time'] = Carbon::parse($att['start_time'])->toDateTimeString();
        $att['end_time'] = Carbon::parse($att['end_time'])->toDateTimeString();
		
		$product = Product::create($att);
		
		//處理圖片上傳
		if ($request->hasFile('pics')) {
			$pics = $request->file('pics');
			foreach($pics as $pic){
				if(!in_array($pic->getClientOriginalExtension(),array('jpg','jpeg','png'))) continue;
				$info = [
					'mime-type' => $pic->getMimeType(),
					'original_filename' => $pic->getClientOriginalName(),
					'extension' => $pic->getClientOriginalExtension(),
					'size' => $pic->getClientSize(),
				];
				$pic->storeAs('public/products/'.$product->id, $info['original_filename']);
			}
		}


		return redirect()->route('adm_Product');
	}
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
    	if($product->view_time <= Carbon::now())
            return redirect()->back()->with('has_begin', '已過公布時間，無法編輯');

		$files = get_files(storage_path('app/public/products/'.$product->id));
		$pics[$product->id] = $files;
		
		if($pics[$product["id"]] != NULL)
		  $file_path = str_replace('/','&',storage_path('app/public/products/'.$product["id"].'/'.$pics[$product["id"]][0]));
		else
		  $file_path = '';
	  
        return view('adm.EditProduct', compact('product','file_path')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    	if($product->view_time <= Carbon::now())
    		return redirect()->back()->with('has_begin', '已過公布時間，無法編輯');
		$att['name'] = $request->input('name');
		$att['view_time'] = $request->input('view_time');
		$att['start_time'] = $request->input('start_time');
		$att['end_time'] = $request->input('end_time');
        $att['detail'] = $request->input('detail');
        $att['origin_price'] = $request->input('origin_price'); 
        
        //更改型別
        $att['view_time'] = Carbon::parse($att['view_time'])->toDateTimeString();
        $att['start_time'] = Carbon::parse($att['start_time'])->toDateTimeString();
        $att['end_time'] = Carbon::parse($att['end_time'])->toDateTimeString(); 

		$product->update($att);
		
		//處理圖片上傳
		if ($request->hasFile('pics')) {
			//如果有圖片，先刪掉舊的，然後再上傳新的
			Storage::deleteDirectory("public/products/".$product->id);
		
			$pics = $request->file('pics');
			foreach($pics as $pic){
				if(!in_array($pic->getClientOriginalExtension(),array('jpg','jpeg','png'))) continue;
				$info = [
					'mime-type' => $pic->getMimeType(),
					'original_filename' => $pic->getClientOriginalName(),
					'extension' => $pic->getClientOriginalExtension(),
					'size' => $pic->getClientSize(),
				];
				$pic->storeAs('public/products/'.$product->id, $info['original_filename']);
			}
		}
		
		return redirect()->route('adm_Product');
    }

    public function details(Product $product)
    {
        return view('adm.Details', compact('product')); 
    }
    
    public function status(Product $product)
    {
        if($product->status == 0)
            $product->update(['status' => '1']);

        return redirect()->route('adm_Product'); 
    }

    /**
     * Delete the spectified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Responese
     */

    public function destroy(Product $product)
    {
    	if($product->view_time <= Carbon::now())
    		return redirect()->back()->with('has_begin', '已過公布時間，無法刪除');
		//Storage::deleteDirectory("public/products/".$product->id);
        $product->delete(); 
        return redirect()->route('adm_Product'); 
    }
}
