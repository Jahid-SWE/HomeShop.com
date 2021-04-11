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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[
    'uses'=>'HomeShopController@index',
    'as'  =>'home'
]);
Route::get('/collection',[
    'uses' =>'HomeShopController@collection',
    'as' =>'collection'
]);

Route::get('/category',[
  'uses' =>'HomeShopController@category',
    'as' =>'category'
]);
Route::get('/cart',[
    'uses' =>'HomeShopController@cart',
    'as' =>'cart-page'
]);
Route::get('/checkout',[
    'uses' =>'HomeShopController@checkOut',
    'as' =>'checkout'
]);
Route::get('/single-blog-page',[
    'uses' =>'HomeShopController@singlePage',
    'as' =>'single-blog-page'
]);
Route::get('/registration',[
    'uses' =>'HomeShopController@registration',
    'as' =>'registration'
]);
Route::get('/contact',[
    'uses' =>'HomeShopController@contact',
    'as' =>'contact'
]);
Route::get('/affiliate',[
    'uses' =>'HomeShopController@affiliate',
    'as' =>'affiliate'
]);
Route::get('/forget-password',[
    'uses' =>'HomeShopController@forgetPassword',
    'as' =>'forget-password'
]);
Route::get('/blog',[
    'uses' =>'HomeShopController@blog',
    'as' =>'blog'
]);
Route::get('/about',[
    'uses' =>'HomeShopController@about',
    'as' =>'about'
]);

