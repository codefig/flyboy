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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UserController@index')->name('user.index');
Route::get('/bio', 'UserController@bio')->name('user.bio');
Route::get('/music', 'UserController@music')->name('user.music');
Route::get('/photos', 'UserController@photos')->name('user.photos');
Route::get('/videos', 'UserController@videos')->name('user.videos');
Route::get('/news', 'UserController@news')->name('user.news');
Route::get('/events', 'UserController@events')->name('user.events');
Route::get('/contact', 'UserController@contact')->name('user.contact');