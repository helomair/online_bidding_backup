<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class AdminProductController extends Controller
{
    //auth驗證是否登入 , is_adm驗證是否為Admin
    public function __construct()
    {
        //$this->middleware('auth');
//        $this->middleware('is_adm');
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
        //$products = Product::find($id)->get();
		////尚未有新增or編輯頁面，都先以原本的view為主
		//原本的view是吃$products 所以先將$product替換成$products 
		//link()的方法也會有問題，所以還是得等之後的頁面，目前暫且放置
		$products = [
		'product'=>$product
		];
        return view('adm.Product', compact('products'));        
    }
}
