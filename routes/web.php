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
Route::get('/closed', function () {
    return view('user/closed');
})->name('closed');
Route::get('/bidding', function () {
    return view('user/bidding');
})->name('bidding');
Route::get('/account', function () {
    return view('user/account');
})->name('account');

//////顯示管理者頁面
////商品管理
//首頁
Route::get('/adm/product', 'AdminProductController@index' )->name('adm_Product'); 
//顯示
Route::get('/adm/product/{product}/show', 'AdminProductController@show' )->name('adm_Product.show'); 
//新增表單
Route::get('/adm/product/create', 'AdminProductController@create')->name('adm_Product.create');
//傳送新增表單 
Route::post('/adm/product/store', 'AdminProductController@store')->name('adm_Product.store'); 
//開啟指定表單
Route::get('/adm/product/{product}/edit', 'AdminProductController@edit')->name('adm_Product.edit');
//傳送修改表單 
Route::patch('/adm/product/{product}', 'AdminProductController@update')->name('adm_Product.update');
//刪除
Route::delete('/adm/product/{product}', 'AdminProductController@destroy')->name('adm_Product.destroy');

////帳號管理
//首頁
Route::get('/adm/account','AdminAccountController@index' )->name('adm_Account');
//顯示
Route::get('/adm/account/{user}/show', 'AdminAccountController@show' )->name('adm_Account.show');
//刪除
Route::delete('/adm/account/{id}', 'AdminAccountController@destroy')->name('adm_Account.destroy');

////公告管理
//首頁
Route::get('/adm/bulletin', 'BulletinController@index')->name('adm_Bulletin');
//顯示
Route::get('/adm/bulletin/{bulletin}/show', 'BulletinController@show' )->name('adm_Bulletin.show'); 
//新增表單
Route::get('/adm/bulletin/create', 'BulletinController@create')->name('adm_Bulletin.create');
//傳送新增表單 
Route::post('/adm/bulletin/store', 'BulletinController@store')->name('adm_Bulletin.store'); 
//開啟指定表單
Route::get('/adm/bulletin/{bulletin}/edit', 'BulletinController@edit')->name('adm_Bulletin.edit');
//傳送修改表單 
Route::patch('/adm/bulletin/{bulletin}', 'BulletinController@update')->name('adm_Bulletin.update');
//刪除
Route::delete('/adm/bulletin/{bulletin}', 'BulletinController@destroy')->name('adm_Bulletin.destroy');

//加值紀錄
//首頁
Route::get('/adm/save', function () {
    return view('adm/Save');
})->name('adm_Save');


//結標填寫資料
Route::get('/winner', function () {
    return view('EndBiddingDetail');
})->name('winner');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('admin','AdminController'); 
