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
Route::get('/news/view', 'UserController@fullnews')->name('user.news.fullnews');
Route::get('/events', 'UserController@events')->name('user.events');
Route::get('/contact', 'UserController@contact')->name('user.contact');
Route::get('/playmusic', 'UserController@playmusic')->name('user.playmusic');
Route::get('/showphotos', 'UserController@showphotos')->name('user.showphotos');

/**
 *  Route for the administrative links
 */

Route::get('/admin', 'UserController@showAdminLogin')->name('admin.login');
Route::post('/admin/login', 'UserController@checkAdminLogin')->name('admin.login.post');
Route::get('/admin/home', 'AdminController@showHome')->name('admin.home');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
