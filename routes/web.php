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
Route::group([
    'namespace' => 'Client',
    'middleware' => 'productId'
], function() {
    Route::get('', [
        'uses' => 'HomeController@index'
    ]);
    Route::get('gioi-thieu', 'HomeController@about');
    Route::get('lien-he', 'HomeController@contact');
    Route::get('gio-hang', 'CartController@cart');
    Route::get('gio-hang/thanh-toan', 'CartController@checkout');
    Route::get('gio-hang/hoan-thanh', 'CartController@complete');
    Route::get('gio-hang/add', 'CartController@add');
    Route::post('gio-hang/update', 'CartController@update');
    Route::post('gio-hang/destroy', 'CartController@destroy');
    Route::post('gio-hang/store', 'CartController@store');
    Route::get('san-pham/{id}', 'ProductController@detail');
    Route::get('san-pham', 'ProductController@shop');
});