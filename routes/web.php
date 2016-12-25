<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('test', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Route::auth();
    Route::group(['middleware' => 'role:admin|auth', 'namespace' => 'Admin'], function () {
        Route::get('/', 'HomeController@index');
        Route::resource('user', 'UserController');
        Route::resource('user.favorite', 'FavoriteController', ['only' => ['index']]);
        Route::resource('item', 'ItemController', ['except' => ['create', 'store']]);
        Route::resource('item.rate', 'RateController', ['only' => ['index']]);
        Route::resource('order', 'OrderController', ['only' => ['show']]);

        Route::group(['namespace' => 'Misc'], function () {
            Route::resource('role', 'RoleController');
            Route::resource('report', 'ReportController', ['only' => ['index', 'show', 'edit', 'update']]);
            Route::resource('verification', 'VerificationController', ['only' => ['index', 'show', 'edit', 'update']]);
        });
    });
});

Route::group(['prefix' => 'business', 'middleware' => 'auth', 'namespace' => 'Business'], function () {
    Route::get('/', 'BusinessController@index');
    Route::resource('item', 'ItemController');
    Route::resource('item.rate', 'RateController', ['only' => 'index']);
    Route::resource('order', 'OrderController', ['only' => ['index', 'show', 'update']]);
    Route::resource('report', 'ReportController', ['only' => ['index', 'show']]);
});

Route::group(['prefix' => 'my', 'middleware' => 'auth', 'namespace' => 'User'], function () {
    Route::resource('/', 'UserController', ['only' => ['index', 'store', 'update']]);
    Route::resource('order', 'OrderController', ['except' => ['destroy']]);
    Route::resource('order.rate', 'RateController', ['only' => ['create', 'edit', 'store', 'update']]);
    Route::resource('report', 'ReportController', ['only' => ['index', 'show', 'create', 'store']]);
    Route::resource('favorite', 'FavoriteController', ['only' => ['index', 'store', 'destroy']]);
    Route::resource('verification', 'VerificationController', ['only' => ['index', 'create', 'store']]);
    Route::get('order/{id}/tradesuccess','OrderController@tradeSuccess');
    Route::get('message','UserController@message');
    Route::get('address','UserController@address');
});

Route::group(['namespace' => 'Portal'], function () {
//    Route::get('/', 'HomeController@index');
    Route::get('/', 'ItemController@index');//主页
    Route::get('item', 'ItemController@showAll');
    Route::get('item/{id}', 'ItemController@show');
    Route::get('item/{id}/rate','ItemController@rateShow');
    Route::get('item/{id}/buy','ItemController@buy');
    Route::get('item/{id}/pay','ItemController@pay');
    Route::get('item/{id}/paysuccess','ItemController@paySuccess');
    Route::get('item/create','ItemController@store');
//    Route::get('cart','CartController@index');

    Route::resource('cart', 'CartController', ['only' => ['index', 'destroy', 'create', 'store']]);
    Route::resource('create', 'SellerController', ['only' => ['index', 'destroy', 'create', 'store']]);
});

//登录、注册
Route::get('signin',function() {
   return view('signin');
});
Route::get("register",function(){
    return view("register");
});
//登录、注册成功跳转
Route::post("signin_check","MyController@signin_check");
Route::post("signup_check","MyController@signup_check");
Route::get("login_out","MyController@login_out");

Route::post("info_check","InfoController@info_check");


Route::get('seller',function() {
    return view('user.seller.index');
});