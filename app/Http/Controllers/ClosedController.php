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
    	$closed_products = Product::where('end_time', '<', $now_time)->paginate(3);;
    	return view('user.closed', compact('closed_products'));
    }
}
