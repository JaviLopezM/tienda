<?php
use App\Product;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $products=Product::all();
    return view('welcome', compact('products'));
});
Route::get('/store','StoreController@index');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/product/{slug}',[
    'as'=>'product-detail',
    'uses'=>'StoreController@show'
    ]);
Route::get('/slider','StoreController@slide');
