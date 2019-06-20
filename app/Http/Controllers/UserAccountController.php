<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\User;
use App\Product;
use App\Payment;
use App\BankAccount;
use Validator;

class UserAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $user = Auth::user(); 
        $auctions = $user->products()->orderBy('auction.created_at', 'desc')->paginate(2);
        $winners = $user->winner_product()->orderBy('created_at', 'desc')->paginate(3);
        //dd($winners);
		return view('user.account', compact('user', 'auctions', 'winners') );
    }

    public function create(Product $product)
    {
    	return view('EndBiddingDetail', compact('product'));
    }

    public function EndBidding(Request $request, Product $product)
    {

        $v = Validator::make($request->all(),[
            'address' => 'required',
            'message' => 'required'
        ], [ 'required' => '不能留空' ]  );

        if($v->fails())
            return back()->withErrors($v)->withInput();

    	$user = Auth::user();
//    	$att['name'] = $request->input('name');
//    	$att['phone'] = $request->input('phone');
    	$att['address'] = $request->input('address');
    	$att['message'] = $request->input('message');

        $product->update($att);
    	return redirect()->route('account');
    }


    // 以下為使用者儲值
    public function createCoin()
    {
        return view('user.coin');
    }

    public function makeCoinPayment(Request $request)
    {
        $user  = Auth::user();
        $coins = $request->input('coin') ;
        $code  = $request->input('code');
        $amount = $coins * 10000; 
        $first_code = false;
        $bank_account = BankAccount::find(rand(1,BankAccount::count()));

        if($code != NULL)
        {
            if( User::where('code', $code)->get()->count() && $user->recommand_code === "" )
            {
                $user->update(['recommand_code' => $code]);
                $first_code = true;
            }
            else 
                return redirect()->back()->withError(['邀請碼不正確 或 此帳號已使用過邀請碼']);
        }
        else
        {
            $first_code = false;
        }
        
        $payment = Payment::create([
            'bid' => $bank_account->id,
            'uid' => $user->id,
            'coins' => $coins,
            'amount' => $amount,
            'user_account' => '尚未轉帳',
            'first_code' => $first_code
        ]);
        //echo $payment->coins . "   " . $coins;
        return  view('CoinPayment', compact('bank_account', 'payment'));
    }

    public function PaymentPay(Request $request, Payment $payment)
    {
        $user_account = $request->input('user_account');
        if( $user_account == NULL )
            return redirect()->back()->withError('帳戶不可為空');
        
        $payment->update([ 'user_account' => $user_account ]);

        return redirect()->route('account');
    }

}
