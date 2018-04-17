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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'roladmin']], function () {});

Route::group(['prefix'=>'client', 'middleware'=>['auth', 'rolclient']], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['prefix'=>'artisan', 'middleware'=>['auth', 'rolartisan']], function () {});