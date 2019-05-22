<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Auction;

class InterfaceController extends Controller
{
	public function index()
	{
		return view('user.interface');
	}
    public function show(Product $product)
    {
    	return view('user.interface', compact('product'));
    }
}
