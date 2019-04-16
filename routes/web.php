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
Route::get('/clear', 'ClearController@clear')->name('clear');

Route::get('/', 'PageController@index')->name('main');
Route::get('/shop', 'ProductViewController@shop')->name('shop');
Route::get('/shop/{slug}', 'ProductViewController@showitemforslug');
Route::get('/price','PageController@price');
Route::get('/news','PageController@news');
Route::post('/search', 'SearchController@filter')->name('search');

Auth::routes();

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['admin']],function (){
Route::get('/','dashboard_controller@dashboard')->name('admin.index');
Route::resource('/category','CategoryController', ['as'=>'admin']);
Route::resource('/products','ProductController',['as'=>'admin']);
Route::resource('/orders','OrderController',['as'=>'admin']);
});

Route::get('/add-to-cart/{id}','ProductController@getAddToCart')->name('add.to.cart');
Route::get('/show-cart', 'ProductController@showCart')->name('show.cart');
Route::get('/forget', 'ProductController@destroy')->name('destroy');
Route::get('/reduce-by-one/{id}', 'ProductController@reduceByOne')->name('reduce.by.one');
Route::get('/increase-by-one/{id}', 'ProductController@increaseByOne')->name('increase.by.one');
Route::get('/delete/{id}', 'ProductController@delete')->name('delete.product');
Route::get('/checkout', 'CheckoutController@checkout')->name('checkout');
Route::post('/checkout', 'CheckoutController@checkoutForm')->name('checkout.form');
Route::get('/success', 'CheckoutController@success')->name('success');

