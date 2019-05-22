<?php

namespace App\Http\Controllers;

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
        $products = Product::paginate(2);
        //先假設路徑為admin/index.blade.php
        return view('adm.Product', compact('products')); 
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
		
		Product::create($att);
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
}
