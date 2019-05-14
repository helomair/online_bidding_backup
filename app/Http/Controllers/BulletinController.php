<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bulletin; 

class BulletinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_adm');
    }


    public function index()
    {
        $bulletins = Bulletin::where('on','1')->paginate(2); 
        return view('adm.Bulletin', compact('bulletins'));
    }
    //
}
