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
        $bulletins = Bulletin::where('on','1')->paginate(3); 
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $att['title'] = $request->input('title');
        $att['content'] = $request->input('content');
        
        Bulletin::create($att);
        return redirect()->route('adm_Bulletin');
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
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bulletin $bulletin)
    {
        $att['title'] = $request->input('title');
        $att['content'] = $request->input('content');
        
        $bulletin->update($att);

        return redirect()->route('adm_Bulletin'); 
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bulletin $bulletin)
    {
        $bulletin->update( ['on' => '0'] );

        return redirect()->route('adm_Bulletin');
    }
}
