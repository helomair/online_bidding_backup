<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class FBSocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect(); 
    }   

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();  
        $user = $this->createUser($getInfo,$provider);  
        auth()->login($user);  
        return redirect()->to('/');
    }

    function createUser($getInfo,$provider)
    {
        $user = User::where('fblogin_providerId', $getInfo->id)->first(); 
        if (!$user) 
        {
            $nickname = Str::random(8);
            $new_code = Str::random(6);
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'password' => Hash::make($provider . $getInfo->name),
                'fblogin_provider' => $provider,
                'fblogin_providerId' => $getInfo->id,
                'nickname' => $nickname,
                'code' => $new_code,
            ]); 
        }
        return $user; 
    }
}
