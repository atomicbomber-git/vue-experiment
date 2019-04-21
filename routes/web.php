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

Route::get('/', "HomeController@show");

Route::group(['prefix' => '/item', 'as' => 'item.'], function() {
    Route::get('/index', 'ItemController@index')->name('index');
    Route::get('/create', 'ItemController@create')->name('create');
    Route::post('/store', 'ItemController@store')->name('store');
    Route::get('/edit/{item}', 'ItemController@edit')->name('edit');
    Route::post('/update/{item}', 'ItemController@update')->name('update');
    Route::post('/delete/{item}', 'ItemController@delete')->name('delete');
});
