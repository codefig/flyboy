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
Route::post('/contactus', 'UserController@contactus')->name('user.contactus');

//other routes for information viewing
Route::get('/news/{slug}', 'UserController@newsLink')
	->name('user.newslink')->where('slug', '[\w\d\-\_]+');

Route::get('/photos/{slug}', 'UserController@categoriesLink')
	->name('user.categorieslink')->where('slug', '[\w\d\-\_]+');

Route::get('/music/{slug}', 'UserController@musicLink')
	->name('user.musiclink')->where('slug', '[\w\d\-\_]+');

/**
 *  Route for the administrative links
 */

//
Route::get('rx865', 'UserController@showAdminLogin')->name('admin.login');
Route::prefix('/rx865')->group(function () {
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
	Route::post('/videos/update', 'AdminController@updateVideos')->name('admin.videos.update');
	Route::get('/videos/{id}/edit', 'AdminController@editVideos')->name('admin.videos.edit');
	Route::get('/videos/{id}/delete', 'AdminController@deleteVideos')->name('admin.videos.delete');
	Route::get('/videos/showall', 'AdminController@showAllVideos')->name('admin.videos.showall');

	//news route
	Route::get('/news/add', 'AdminController@showAddNews')->name('admin.news.add');
	Route::post('/news/submit', 'AdminController@addNews')->name('admin.news.submit');
	Route::get('/news/{id}/edit', 'AdminController@editNews')->name('admin.news.edit');
	Route::post('/news/update', 'AdminController@updateNews')->name('admin.news.update');
	Route::get('/news/{id}/delete', 'AdminController@deleteNews')->name('admin.news.delete');
	Route::get('/news/showall', 'AdminController@showAllNews')->name('admin.news.showall');

	//photos category route
	Route::get('/photos/addcategory', 'AdminController@showAddCategory')->name('admin.photocategory.add');
	Route::get('/photos/showcategory', 'AdminController@showAllCategory')->name('admin.photocategory.showall');
	Route::post('/photos/submitcategory', 'AdminController@addCategory')->name('admin.photocategory.submit');
	Route::get('/photos/category/{id}/edit', 'AdminController@editCategory')->name('admin.photocategory.edit');
	Route::post('/photos/category/update', 'AdminController@updateCategory')->name('admin.photocategory.update');
	Route::get('/photos/category/{id}/delete', 'AdminController@deleteCategory')->name('admin.photocategory.delete');

	//photos route
	Route::get('/photos/add', 'AdminController@showAddPhotos')->name('admin.photos.add');
	Route::post('/photos/submit', 'AdminController@addPhotos')->name('admin.photos.submit');
	Route::get('/photos/{id}/edit', 'AdminController@editPhotos')->name('admin.photos.edit');
	Route::post('/photos/update', 'AdminController@updatePhotos')->name('admin.photos.update');
	Route::get('/photos/showall', 'AdminController@showAllPhotos')->name('admin.photos.showall');
	Route::get('/photos/{id}/delete', 'AdminController@deletePhotos')->name('admin.photos.delete');

	//music album routes
	Route::get('/music/addalbum', 'AdminController@showAddAlbum')->name('admin.musicalbum.add');
	Route::get('/music/showallalbum', 'AdminController@showAllAlbum')->name('admin.musicalbum.showall');
	Route::post('/music/submitalbum', 'AdminController@addAlbum')->name('admin.musicalbum.submit');
	Route::get('/music/album/{id}/edit', 'AdminController@editAlbum')->name('admin.musicalbum.edit');
	Route::post('/music/album/update', 'AdminController@updateAlbum')->name('admin.musicalbum.update');
	Route::get('/music/album/{id}/delete', 'AdminController@deleteAlbum')->name('admin.musicalbum.delete');

	//single music routes
	Route::get('/song/add', 'AdminController@showAddMusic')->name('admin.music.add');
	Route::post('/song/submit', 'AdminController@addMusic')->name('admin.music.submit');
	Route::get('/song/{id}/edit', 'AdminController@editMusic')->name('admin.music.edit');
	Route::post('/song/update', 'AdminController@updateMusic')->name('admin.music.update');
	Route::get('/song/showall', 'AdminController@showAllMusic')->name('admin.music.showall');
	Route::get('/song/{id}/delete', 'AdminController@deleteMusic')->name('admin.music.delete');

	//contact us messages route
    Route::get('/email/showall', 'AdminController@showEmails')->name('admin.showemails');
});
