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


Route::get('/', function() {
    return 'Hello';
});

// Auth
// Route::get('showLoginForm', [
//     'as' => 'admin.login.showLoginForm',
//     'uses' => 'Auth\LoginController@showLoginForm'
// ]);

// Route::post('login', [
//     'as' => 'admin.login.login',
//     'uses' => 'Auth\LoginController@login'
// ]);

// Route::post('logout', [
//     'as' => 'admin.login.logout',
//     'uses' => 'Auth\LoginController@logout'
// ]);
//end Auth

// Route::group([
//     'namespace' => 'Client'
// ], function() {
//     Route::get('','HomeController@index');
//     Route::get('about', [
//         'as' => 'about',
//         'uses' => 'HomeController@about'
//     ]);
//     Route::get('contact', [
//         'as'=> 'contact',
//         'uses' => 'HomeController@contact'
//     ]);
//     Route::group(['prefix' => 'cart'], function() {
//         Route::get('', [
//             'as' => 'cart',
//             'uses' => 'CartController@cart'
//         ]);
//         Route::get('checkout', [
//             'as' => 'cart.checkout',
//             'uses' => 'CartController@checkout'
//         ]);
//         Route::get('complete', [
//             'as' => 'cart.complete',
//             'uses' => 'CartController@complete'
//         ]);
//     });
    
//     Route::group(['prefix' => 'product'], function() {
//         Route::get('{id}', [
//             'as' => 'product.detail',
//             'uses' => 'ProductController@detail'
//         ]);
//         Route::get('', [
//             'as' => 'product',
//             'uses' => 'ProductController@shop'
//         ]);
//     });
// });

Route::group([
    'namespace' => 'Client'

], function() {
    Route::get('', [
        'uses' => 'HomeController@index'
    ]);
    Route::get('gioi-thieu', 'HomeController@about');
    Route::get('lien-he', 'HomeController@contact');

    Route::get('gio-hang', 'CartController@cart');
    Route::get('gio-hang/thanh-toan', 'CartController@checkout');
    Route::get('gio-hang/hoan-thanh', 'CartController@complete');
    Route::post('gio-hang/add', 'CartController@add');
    Route::get('san-pham/{id}', 'ProductController@detail');
    Route::get('san-pham', 'ProductController@shop');
});




