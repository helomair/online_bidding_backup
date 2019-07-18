<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema; 
use App\User; 
use App\Product;
use Auth; 
use Session; 


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
        $users = User::where('on','1')->paginate(10);
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
		
        return view('adm.EditAccount', compact('user'));         
    }

    /*
     * Search user info
     * @param search, search for what
     * @return search result
     */
    public function search(Request $request)
    {
		$columns = Schema::getColumnListing('users');
		$search = $request->input('keyword');
		
		//更改成有分頁寫法的模式
		$user = new User;
        $where = $user;
        //搜詢條件判斷
        foreach($columns as $column) 
        { 
            $where = $where->orWhere($column,'LIKE','%'.$search.'%'); 
        }
        //分頁
        $users = $where->paginate(2);

        return view('adm.Account', compact('users'));
    }


    // 管理員 以 使用者身份登入
    public function info(User $user)
    {
        $admId = Auth::id(); 
        Session::put('adm_on', $admId); 
        Auth::logout();
        Auth::login($user);
        return redirect()->route('account'); 
    }

    public function update(Request $request, User $user)
    {
        $att = array(
            'name' => $request->input('name'),
            'realname' => $request->input('realname'),
            'phone' => $request->input('phone')
        );
        $user->update($att);
        return back()->with(['msg' => '更新成功']);
    }


    /*
     * Delete user, set column "on" to false
     * @param id, id for user
     * @return result
     */
    public function destroy($id)
    {
        if($id == Auth::id() && Auth::user()->is_adm)
            return redirect()->back()->withErrors(['delete user error : 不可刪除自己']); 
        $user = User::find($id)->update(['on' => 0]);
        //echo "error"; 
        return redirect('/adm/account');
    }

}
