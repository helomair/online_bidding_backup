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

    public function PaymentSubmit(Payment $payment)
    {
        $user = $payment->users;
        $coins = $payment->coins;

        if($payment->first_code)
            $coins = $coins + 10;

        $payment->update(['on' => false]);
        $user->update(['balance' => $user->balance + $coins]);

        return redirect()->route('adm_Save'); 
    }
}
