<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\User; 
use App\Product; 


class AdminAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
        $this->middleware('is_adm');
    }

    /*
     * The Main Page
     * @return adm.Account, with all users
     */
    public function index()
    {
        //$users = User::all();
		//為了自動切分頁，更改了controller
        $users = User::where('on','1')->paginate(2);
        return view('adm.Account', compact('users'));
    }

    /*
     * Show the details
     * @param id, is the user's uid
     * @return adm.Account, with one user
     */
    public function show(User $user)
    {
        //$user = User::find($id)->get(); 
		////尚未有新增or編輯頁面，都先以原本的view為主
		//原本的view是吃$users所以先將$user替換成$users
		//link()的方法也會有問題，所以還是得等之後的頁面，目前暫且放置
		$users = [
    		'user' => $user
		];
		
        return view('adm.Account', compact('users'));         
    }

    /*
     * Search user info
     * @param search, search for what
     * @return search result
     */
    public function search($search)
    {
        $columns = Schema::getColumnListing('users');
        $query = User::query();

        foreach($columns as $column) 
        {
            $query->orWhere($column,'LIKE','%'.$search.'%');
        }

        $users = $query->get();
        return view('adm,Account', compact('users'));
    }

    /*
     * Delete user, set column "on" to false
     * @param id, id for user
     * @return result
     */
    public function destroy(User $user)
    {
		//dd($id);
        //$user = User::find($id)->update(['on' => 0]);
		$user->update(['on' => 0]);
        return redirect('/adm/account');
    }

}
