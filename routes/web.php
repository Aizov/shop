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

Route::get('/', 'IndexController@show');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('product/{id}', 'IndexController@product')->name('productShow');

Route::get('ads', 'IndexController@ad')->name('adShow');
Route::get('apanel', ['uses'=>'ApanelController@show',])->name('apanelShow');
Route::get('apanel', ['uses'=>'ApanelController@show',])->name('apanelShow');
Route::get('apanel', ['uses'=>'ApanelController@show',])->name('apanelShow');
Auth::routes();
