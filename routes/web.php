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


//課題3
Route::get('XXX', 'AAAController@bbb');


//課題４
Route::group(['prefix' => 'admin'], function() {
     Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
     Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
     Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
