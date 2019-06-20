<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 
use Illuminate\Http\Request; 
use App\User; 
use Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout'); 
    }


    protected function authenticated(Request $request, $user)
    { 
        if($user->is_adm)
            Session::put('adm_on', 1);
        else
            Session::put('adm_on', 0);
        return redirect()->intended($this->redirectPath());
    }


    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        $active_user = User::where($this->username(), $request[$this->username()])
            ->where('on','1')->first(); 
        if($active_user !== NULL)
        {
            return $this->guard()->attempt(
                $this->credentials($request), $request->filled('remember')
            );
        }
        return false; 
    }

}
