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

Route::get('/', 'HomeController@index')->name('index');
//拍賣規則
Route::get('BidRule', function(){
	return view('Rule');
})->name('bid.rule');

//使用者登入驗證功能
Auth::routes();

//註冊確認，使用者同意書
Route::get('register/confirm', function(){
	return view('RegisterConfirm');
})->name('register.confirm');

//Email驗證功能
Route::get('send_mail', 'UserAccountController@SendConfirmMail')->name('send_mail'); 
Route::get('/activation/{token}', 'UserAccountController@EmailTokenConfirm')->name('confirm'); 

//FB登入功能
Route::get('/redirect/{provider}', 'FBSocialController@redirect')->name('fb.redirect');
Route::get('/callback/{provider}', 'FBSocialController@callback')->name('fb.callback');


////顯示使用者頁面，登入後直接導到這個頁面
//之後改用controller來帶，順便帶資料進來
//Route::get('user', 'PostsController@index')->name('posts.index'); 
Route::get('/user', 'InterfaceController@index')->name('user_interface');
Route::get('/user/{product}/show', 'InterfaceController@show')->name('user_interface.show');
//使用者資料更新
Route::post('/user/{user}/update', 'AdminAccountController@update')->name('user.update');

//已結標
Route::get('/closed','ClosedController@index')->name('closed');
///////下標頁面
///表單
Route::get('/bidding/{product}','BiddingController@store')->name('bidding');
///儲存表單
Route::post('/bidding/{product}/auto','BiddingController@storeAuto')->name('bidding.auto');
Route::delete('/bidding/{product}/delete', 'BiddingController@deleteAuto')->name('bidauto.cancel');

//帳號狀態
Route::get('/account', 'UserAccountController@index')->name('account');
//結標填寫資料
Route::get('/winner/{product}', 'UserAccountController@create')->name('winner.create');
Route::post('/winner/{product}/end', 'UserAccountController@EndBidding')->name('winner.endbidding');
//儲值頁面
Route::get('/coin', 'UserAccountController@createCoin')->name('coin');
//儲值 建立帳單
Route::post('/coin/make', 'UserAccountController@makeCoinPayment')->name('coin.make');
//儲值 用戶填寫帳戶資料
Route::post('/coin/{payment}/pay', 'UserAccountController@PaymentPay')->name('coin.pay');
//儲值 管理員確認
Route::get('/coin/{payment}/submit', 'SaveController@PaymentSubmit')->name('coin.submit');
//儲值 刪除
Route::delete('/coin/{payment}/delete', 'UserAccountController@CoinCancel')->name('coin.cancel');

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
//詳細
Route::get('/adm/product/{product}/details', 'AdminProductController@details')->name('adm_Product.details');
//狀態
Route::get('/adm/product/{product}/status', 'AdminProductController@status')->name('adm_Product.status');
//顯示圖片
Route::get('img/{file_path}', 'HomeController@getImg')->name('img');

////帳號管理
//首頁
Route::get('/adm/account','AdminAccountController@index' )->name('adm_Account');
//搜尋
Route::post('/adm/account/search','AdminAccountController@search' )->name('adm_Search');
//顯示
Route::get('/adm/account/{user}/show', 'AdminAccountController@show' )->name('adm_Account.show');
//以使用者身份登入
Route::get('/adm/account/{user}/info', 'AdminAccountController@info' )->name('adm_Account.info'); 
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
//首頁顯示詳細 彈出式視窗連結
Route::get('/adm/bulletin/{bulletin}/content', 'BulletinController@contents')->name('adm_Bulletin.content'); 


//加值紀錄
//首頁
Route::get('/adm/save', 'SaveController@index')->name('adm_Save');

//footer
//關於我們
Route::get('/aboutus', function () {
    return view('AboutUs');
})->name('aboutus');
//問與答
Route::get('/fq', function () {
    return view('FQ');
})->name('fq');
//服務條款
Route::get('/service', function () {
    return view('Service');
})->name('service');
//隱私政策
Route::get('/privacy', function () {
    return view('Privacy');
})->name('privacy');
//聯繫我們
Route::get('ContactUs', function(){
	return view('ContactUs');
})->name('contact_us');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('admin','AdminController'); 
