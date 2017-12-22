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


//
Route::get('admin', 'UserController@showAdminLogin')->name('admin.login');
Route::prefix('/admin')->group(function () {
    Route::post('/login', 'UserController@checkAdminLogin')->name('admin.login.post');
    Route::get('/home', 'AdminController@showHome')->name('admin.home');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');

    //events route
    Route::get('/events/add', 'AdminController@showAddEvents')->name('admin.events.add');
    Route::post('/events/submit', 'AdminController@addEvents')->name('admin.events.submit');
    Route::get('/events/{id}/edit', 'AdminController@editEvents')->name('admin.events.edit');
    Route::post('/events/update', 'AdminController@updateEvents')->name('admin.events.update');
    Route::get('/events/{id}/delete', 'AdminController@deleteEvents')->name('admin.events.delete');
    Route::get('/events/showall', 'AdminController@showAllEvents')->name('admin.events.showall');

    //videos route
    Route::get('/videos/add', 'AdminController@showAddVideos')->name('admin.videos.add');
    Route::post('/videos/submit', 'AdminController@addVideos')->name('admin.videos.submit');
    Route::get('/videos/{id}/edit', 'AdminController@editVideos')->name('admin.videos.edit');
    Route::get('/videos/{id}/delete', 'AdminController@deleteVideos')->name('admin.videos.delete');
    Route::get('/videos/showall', 'AdminController@showAllVideos')->name('admin.videos.showall');
});

