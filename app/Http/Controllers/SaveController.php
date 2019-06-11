<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class SaveController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function index()
    {
    	$payments = Payment::paginate(2);
    	return view('adm.Save', compact('payments'));
    }
}
