<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\User; 
use App\ Product; 


class AdminAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    //    $this->middleware('is_adm');
    }

    /*
     * The Main Page
     * @return adm.Account, with all users
     */
    public function index()
    {
        $users = User::all();
        return view('adm.Account', compact('users'));
    }

    /*
     * Show the details
     * @param id, is the user's uid
     * @return adm.Account, with one user
     */
    public function show($id)
    {
        $user = User::find($id)->get(); 
        return view('adm.Account', compact('user'));         
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
    public function destroy($id)
    {
        $user = User::find($id)->update(['on' => 0]);
        return redirect('/adm');
    }

}
