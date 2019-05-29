<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Product;

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
		//將所有圖片取出
		//dd($products);
		foreach($products as $product){
			$files = get_files(storage_path('app/public/products/'.$product->id));
			$pics[$product->id] = $files;
		}
        //先假設路徑為admin/index.blade.php
        return view('adm.Product', compact('products','pics')); 
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
        //$att['view_time'] = Carbon::createFromFormat('Y/m/d', '2016/05/05')->timestamp;
		$att['start_time'] = $request->input('start_time');
		$att['end_time'] = $request->input('end_time');
		$att['detail'] = $request->input('detail');
		$att['cost'] = $request->input('cost');
		$att['cur_cost'] = $request->input('cur_cost');
		
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
        return view('adm.EditProduct', compact('product')); 
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
		$att['name'] = $request->input('name');
		$att['view_time'] = $request->input('view_time');
		$att['start_time'] = $request->input('start_time');
		$att['end_time'] = $request->input('end_time');
		$att['detail'] = $request->input('detail');
		
		$product->update($att);
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
        $product->delete(); 
        return redirect()->route('adm_Product'); 
    }
	
	public function getImg($file_path)
	{
		$file_path = str_replace('&','/',$file_path); //斜線不可以在URL中傳
		$file = File::get($file_path);
		$type = File::mimeType($file_path);

		return response($file)->header("Content-Type", $type);
	}

}
