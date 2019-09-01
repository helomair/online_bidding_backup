<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User; 

class SaveController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function index()
    {
    	$payments = Payment::paginate(10);
    	return view('adm.Save', compact('payments'));
    }

    public function PaymentSubmit(Payment $payment)
    {
        $user = $payment->users;
        $coins = $payment->coins;

        if($payment->first_code)
        {
            $coins = $coins + 10;
            $giver = User::where('code', $user->recommand_code)->get()->first();

            if ($giver != null) {
                $giver->update(['balance' => $giver->balance + 10]); 
            }
        }

        $payment->update(['on' => false]);
        $user->update(['balance' => $user->balance + $coins]);

        return redirect()->route('adm_Save'); 
    }
}
