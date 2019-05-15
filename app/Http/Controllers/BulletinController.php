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

    /*
     * Show a product's detail
     * @param the product's pid
     * @return one product with id
     */
    public function show(Bulletin $bulletin)
    {
        return view('adm.Bulletin', compact('bulletin'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.CreateBulletin');
    }
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bulletin $bulletin)
    {
        return view('adm.EditBulletin', compact('bulletin')); 
    }
}
