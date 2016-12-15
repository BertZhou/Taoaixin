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
    Route::resource('order', 'OrderController', ['except' => ['destory']]);
    Route::resource('order.rate', 'RateController', ['only' => ['create', 'edit', 'store', 'update']]);
    Route::resource('report', 'ReportController', ['only' => ['index', 'show', 'create', 'store']]);
    Route::resource('favorite', 'FavoriteController', ['only' => ['index', 'store', 'destory']]);
    Route::resource('verification', 'VerificationController', ['only' => ['index', 'create', 'store']]);
});

Route::group(['namespace' => 'Portal'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('item', 'ItemController@index');
    Route::get('item/{id}', 'ItemController@show');
});

//登录、注册
Route::get('signin',function() {
   return view('signin');
});
Route::get("register",function(){
    return view("register");
});
//Route::get("/",function(){
//    return view("home/index");
//});
//登录、注册成功跳转
Route::post("signin_check","MyController@signin_check");
Route::post("signup_check","MyController@signup_check");

//测试blade模板路由
Route::get("blade",function(){
    return view("home/test");
});