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

////顯示管理者頁面
//之後改用controller來帶，順便帶資料進來
//Route::get('user', 'PostsController@index')->name('posts.index'); 
Route::get('/adm', 'AdminProductController@index' )->name('adm_Product'); 

Route::get('/adm/account','AdminAccountController@index' )->name('adm_Account');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('admin','AdminController'); 
