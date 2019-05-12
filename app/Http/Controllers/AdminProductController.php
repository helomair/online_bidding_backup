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
        $this->middleware('auth');
//        $this->middleware('is_adm');
    }

    // @return All Products
    public function index()
    {
        $products = Product::all();
        //先假設路徑為admin/index.blade.php
        return view('adm.Product', compact('products')); 
    }

    /*
     * Show a product's detail
     * @param the product's pid
     * @return one product with id
     */
    public function show($id)
    {
        $product = Product::find($id)->get();
        return view('adm.Product', compact('product'));        
    }
}
