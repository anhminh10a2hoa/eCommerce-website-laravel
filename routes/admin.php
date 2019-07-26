<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web" middleware group. Enjoy building your Admin!
|
*/

// /admin
Route::group(['middleware'=>'auth'], function(){
    Route::get('', [
        'as' => 'admin.dashboard.index',
        'uses' => 'DashboardController@index'
    ]);
    
    Route::resource('products', 'ProductController', [
        'as' => 'admin',
        'parameters' => ['products' => 'id']
    ]);
    
    Route::resource('users', 'UserController', [
        'as' => 'admin',
        'parameters' => ['users' => 'id']
    ]);
    Route::resource('categories', 'CategoryController', [
        'as' => 'admin',
        'parameters' => ['categories' => 'id']
    ]);
    Route::get('orders/processed', [
        'as' => 'admin.orders.processed',
        'uses' => 'OrderController@processed'
    ]);
    Route::resource('orders', 'OrderController', [
        'as' => 'admin',
        'parameters' => ['orders' => 'id']
    ]);
});



Route::get('login', [
    'as' => 'admin.login.showLoginForm',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => 'admin.login.login',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'admin.login.logout',
    'uses' => 'Auth\LoginController@logout'
]);
