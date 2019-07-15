<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'password' => Hash::make($provider . $getInfo->name),
                'fblogin_provider' => $provider,
                'fblogin_providerId' => $getInfo->id,
                'nickname' => Str::random(12),
                'code' => Str::random(6),
            ]); 
        }
        return $user; 
    }
}
