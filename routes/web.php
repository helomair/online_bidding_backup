<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
#登入
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
#登出
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

#註冊
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register.post');

////顯示使用者頁面，登入後直接導到這個頁面
//之後改用controller來帶，順便帶資料進來
//Route::get('user', 'PostsController@index')->name('posts.index'); 
Route::get('/user', function () {
    return view('user/interface');
})->name('user_interface');

//////顯示管理者頁面
////商品管理
//首頁
Route::get('/adm', 'AdminProductController@index' )->name('adm_Product'); 
//顯示
Route::get('/adm/{product}/show', 'AdminProductController@show' )->name('adm_Product.show'); 

////帳號管理
//首頁
Route::get('/adm/account','AdminAccountController@index' )->name('adm_Account');
//顯示
Route::get('/adm/account/{user}/show', 'AdminAccountController@show' )->name('adm_Account.show');
//刪除
Route::delete('/adm/account/{id}', 'AdminAccountController@destroy')->name('adm_Account.destroy');

////公告管理
//之後改用controller來帶，順便帶資料進來
Route::get('/bulletin', function () {
    return view('adm/Bulletin');
})->name('adm_Bulletin');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('admin','AdminController'); 
