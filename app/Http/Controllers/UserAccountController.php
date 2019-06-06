<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\User;

class UserAccountController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        $auctions = $user->products()->orderBy('auction.created_at', 'desc')->paginate(3);
        $winners = $user->winner_product()->orderBy('winner.created_at', 'desc')->paginate(3);
        //dd($winners);
		return view('user.account', compact('user', 'auctions', 'winners') );
    }
}
