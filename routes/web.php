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
/**
Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/index', 'SiteController@index')->name('index');

Route::get('/', 'SiteController@index')->name('start');

Route::get('/quienessomos', 'SiteController@quienesSomos')->name('who');

Route::get('/aliados', 'SiteController@aliados')->name('aliados');

Route::get('/hazparte', 'SiteController@hazParte')->name('part');

Route::get('/iniciarsesion', 'SiteController@signIn')->name('signin');

Route::get('/contactanos', 'SiteController@contactanos')->name('contactanos');

Route::get('/artesanas', 'SiteController@artesanos')->name('artesanas');

Route::get('/talleres', 'SiteController@talleres')->name('talleres');

Route::post('/contactsendmail', 'SiteController@sendMail')->name('contactsendmail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'roladmin']], function () {});

Route::group(['prefix'=>'client', 'middleware'=>['auth', 'rolclient']], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['prefix'=>'artisan', 'middleware'=>['auth', 'rolartisan']], function () {});
