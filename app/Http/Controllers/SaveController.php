<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class SaveController extends Controller
{
    public function index()
    {
    	$payments = Payment::paginate(2);
    	return view('adm.save', compact('payments'));
    }
}
