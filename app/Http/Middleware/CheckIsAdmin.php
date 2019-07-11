<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use Session; 

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        $admId = Session::get('adm_on');
        
        if( $admId != 0 )
        {
            $adm = User::find($admId); 
            Auth::logout(); 
            Auth::login($adm);
        }

        $user = Auth::user();
        if($user->is_adm)
            return $next($request);
        else
            return redirect('/user'); 
    }
}
