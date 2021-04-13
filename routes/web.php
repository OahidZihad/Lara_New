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

Route::get('/', 'firstInfoController@index')->name('index');

Route::get('/create', 'firstInfoController@create')->name('create');
Route::get('/edit/{id}', 'firstInfoController@edit')->name('edit');

Route::post('/store', 'firstInfoController@store')->name('store');
Route::post('/update/{id}', 'firstInfoController@update')->name('update');
Route::post('/delete/{id}', 'firstInfoController@delete')->name('delete');



