<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class EndBiddingController extends Controller
{
    public function index()
    {
        return view('EndBiddingDetail');
    }

    public function store(Request $request, Product $product)
    {
        $userID = Auth::id(); 
        $address = $request->input('address'); 
        $message = $request->input('message');
        $data = [
            'message' = $message,
            'address' = $address
        ]; 
        $product->winner()->attach($userID,$data);
    }
}
