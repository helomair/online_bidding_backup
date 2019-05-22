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
    	$closed_product = Product::where('end_time', '<', $now_time)->get();
    	return view('user.closed', compact('closed_product'));
    }
}
