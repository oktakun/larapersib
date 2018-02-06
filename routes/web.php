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

/*

Route::get('/', 'HalamanPersibController@getDash');
Route::get('news.create', 'NewsController@create');
Route::resource('news', 'NewsController');

Route::get('/', function () {
    return view('list');
});


*/

  Route::group(['middleware' => ['web']], function() {
  // auth
  Route::get('auth/login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('auth/login', 'Auth\LoginController@login');
  Route::get('auth/logout', 'Auth\LoginController@logout')->name('logout');

  // register
  Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
  Route::post('auth/register', 'Auth\RegisterController@register');


  Route::get('berita/{slug}', ['as' => 'berita.single', 'uses' => 'BeritaController@getSingle'])->where('slug', '[\w\d\-\_]+');
  Route::get('/', 'NewsController@index');
  Route::get('news.create', 'NewsController@create');
  Route::resource('news', 'NewsController');
  Route::resource('tags', 'TagController', ['except' => ['create']]);
  Route::resource('jadwal', 'JadwalController');
  Route::resource('klasmen', 'KlasmenController');
});


/*
Route::get('/', 'HalamanPersibController@getDash');
*/
