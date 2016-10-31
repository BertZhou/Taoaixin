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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('test', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'role:admin|auth', 'namespace' => 'Admin'], function () {

    Route::get('/', 'HomeController@index');
    Route::resource('user', 'UserController');
    Route::resource('user.favorite', 'FavoriteController');
    Route::resource('item', 'ItemController', ['only' => ['index', 'show']]);
    Route::resource('item.rate', 'RateController', ['only' => ['index']]);

    Route::group(['namespace' => 'Misc'], function () {
        Route::resource('role', 'RoleController');
        Route::resource('report', 'ReportController', ['only' => ['index', 'show', 'edit', 'update']]);
        Route::resource('verification', 'VerificationController', ['only' => ['index', 'show', 'edit', 'update']]);
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
    Route::get('/', 'UserController@index');
    Route::resource('order', 'OrderController', ['except' => ['destory']]);
    Route::resource('order.rate', 'RateController', ['only' => ['create', 'edit', 'store', 'update']]);
    Route::resource('report', 'ReportController', ['only' => ['index', 'show', 'create', 'store']]);
    Route::resource('favorite', 'FavoriteController', ['only' => ['index', 'store', 'destory']]);

    Route::resource('verification', 'VerificationController', ['only' => ['index', 'create', 'store']]);
});

Route::group(['middleware' => 'auth', 'namespace' => 'Portal'], function () {
    //
});