<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //auth驗證是否登入 , is_admin驗證是否為Admin
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    // @return All User
    public function index()
    {
        $users = User::all();
        //先假設路徑為admin/index.blade.php
        return view('admin.index', compact('users') ); 
    }

    /**
     * Delete user by admins with $id
     * 
     * @param int $id
     * @return redirect to /home
     */

    public function destroy($id)
    {
        User::destroy($id); 
        return redirect('home')->with('message','User Deleted'); 
    }
}
