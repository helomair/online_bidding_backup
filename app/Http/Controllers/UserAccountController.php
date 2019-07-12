<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail; 
use Carbon\Carbon;
use App\User;
use App\Product;
use App\Payment;
use App\BankAccount;
use App\EmailConfirm; 
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
        $auctions = $user->products()->orderBy('auction.created_at', 'desc')->get();
        $winners = $user->winner_product()->where('end_time','<',Carbon::now())->orderBy('created_at', 'desc')->get();
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required'
        ]);

        if($v->fails())
            return back()->withErrors($v)->withInput();

    	$user = Auth::user();
    	$att['winner_name'] = $request->input('name');
    	$att['winner_phone'] = $request->input('phone');
    	$att['address'] = $request->input('address');
    	$att['message'] = $request->input('message');

        $product->update($att);
    	return redirect()->route('account');
    }


    // 以下為使用者儲值
    public function createCoin()
    {
        $payment = Auth::user()->payments()->where('user_bankname',"")->orWhere('user_name',"")->orWhere('user_account',"")->get()->first(); 
        //echo $payment; 
        if($payment == null) 
            return view('user.coin');
        else
        {
            $bank_account = $payment->bank_account;
            return view('CoinPayment', compact('bank_account','payment')); 
        }
    }

    public function makeCoinPayment(Request $request)
    {
        $user  = Auth::user();
        $coins = $request->input('coin') ;
        $code  = $request->input('code');
        $amount = $coins * 30000; 
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
                return redirect()->back()->with('msg','Mã đến không chính xác');
        }
        else
        { 
            $user->update(['recommand_code' => 'nothing']);
            $first_code = false;
        }
        
        $payment = Payment::create([
            'bid' => $bank_account->id,
            'uid' => $user->id,
            'coins' => $coins,
            'amount' => $amount,
            'user_account' => 'Not Yet',
            'first_code' => $first_code
        ]);
        //echo $payment->coins . "   " . $coins;
        return  view('CoinPayment', compact('bank_account', 'payment'));
    }

    public function PaymentPay(Request $request, Payment $payment)
    {
        $v = Validator::make($request->all(),
            ['user_account' => 'required']
        ); 
        
        $user_account = $request->input('user_account');
        $user_bankname = $request->input('user_bankname');
        $user_name = $request->input('user_name');
        
        $payment->update([ 
            'user_account' => $user_account,
            'user_bankname' => $user_bankname,
            'user_name' => $user_name
        ]);

        return redirect()->route('account');
    }

    public function SendConfirmMail()
    {
        $token = Str::random(20);
        $user = Auth::user();
        $confirm_new = new EmailConfirm;
        $confirm_new->uid = $user->id;
        $confirm_new->confirm_token = $token;
        $confirm_new->expired = Carbon::tomorrow();
        $confirm_new->save();

        $subject = "Email Verification";
        $receiver = $user->email;
        $content = [
            "token" => $token,
            "user_name" => $user->name,
            "user_email" => $user->email,
        ];

        Mail::send('mail.email_confirm', $content, function($message) use ($subject, $receiver)
        {
            $message->from("ian210425@gmail.com", 'I-Bid');
            $message->to($receiver)
                    ->subject($subject);
        });
        return redirect()->back()->with('msg', 'Mail Sended!');
    }

    public function EmailTokenConfirm($token)
    {
        $user = Auth::user(); 
        $email = EmailConfirm::where('confirm_token', $token)
            ->where('expired', '>=', Carbon::now())
            ->where('uid', $user->id)
            ->first();
        if($email != null)
        {
            $user->update(['email_confirm' => true]);
            $email->delete(); 
            return redirect('account')->with('msg', 'Verification Done!');
        }    
        return redirect('account');
    }

    public function CoinCancel(Payment $payment)
    {
        //echo $payment; 
        $payment->delete();
        Auth::user()->update(['recommand_code' => '']);
        return redirect()->route('account'); 
    }

}
