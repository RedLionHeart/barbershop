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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/shop/baxter', 'tovars_controller@item');

Route::get('/shop', 'tovars_controller@shop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth']],function (){
Route::get('/','dashboard_controller@dashboard')->name('admin.index');
Route::resource('/category','CategoryController', ['as'=>'admin']);
Route::resource('/tovars','TovarController',['as'=>'admin']);
});
