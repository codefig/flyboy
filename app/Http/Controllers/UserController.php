<?php

namespace App\Http\Controllers;
use App\Album;
use App\Category;
use App\Event;
use App\Music;
use App\News;
use App\Photo;
use App\Video;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

	/**
	 * Controller for Non Authorised Links for the website
	 */

	public function __construct() {
		$this->middleware('guest');
	}

	public function index() {
		/**
		 *   The index route link
		 */
		// $top_news = DB::table('news')->raw(' SELECT * FROM news order by id DESC limit 3')->get();
		$latest_news = DB::select('select * from news order by id DESC limit 3');
		$latest_music = DB::select('select * from musics order by id desc limit 1');
		$latest_events = DB::select('select * from events order by id desc limit 4');

		return view('index', compact('latest_news', 'latest_music', 'latest_events'));
	}

	public function bio() {
		/**
		 *  The bio information link
		 */
		// return "this is the bio page";
		return view('bio');
	}

	public function music() {
		/**
		 *  The music link
		 */
		$musics = Music::orderBy('id', 'desc')->get();
		$albums = Album::orderBy('id', 'desc')->get();
		return view('music', compact('musics', 'albums'));
	}

	public function photos() {
		/**
		 *  The photos url
		 */
		$categories = Category::where('is_deleted', 0)->get();

		return view('gallery', compact('categories'));
	}

	public function showphotos() {
		return view('album');
	}

	public function videos() {
		$videos = Video::orderBy('id', 'desc')->get();
		return view('videos', compact('videos'));
	}

	public function news() {

		$news = News::orderBy('id', 'desc')->paginate(10);
		return view('news', compact('news', 'latest_news'));
	}

	public function events() {
		//remains paginaation
		$latest = Event::first();
		$events = Event::orderBy('id', 'desc')->paginate(10);
		return view('events', compact('events', 'latest'));
	}

	public function contact() {
		return "this is the contact page";
	}

	public function playmusic() {
		// return "this is the play music function ";
		return view('playmusic');
	}

	public function showAdminLogin(Request $request) {
		// return "this is the admin index page";
		return view('admin.login');
	}

	public function checkAdminLogin(Request $request) {
		// return $request->all();

		//get the datas
		// Auth::attempt($request->all)
		$email = $request->email;
		$password = $request->password;
		$security_key = $request->security_key;

		//do some validation
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required',
			'security_key' => 'required',
		]);

		if (Auth::attempt(['email' => $email, 'password' => $password, 'security_key' => $security_key])) {
			return redirect()->route('admin.home');
		} else {
			return redirect()->back()->with('error_message', 'Invalid login credentials :) ');
		}
	}

	//information links
	public function newsLink($slug) {
		$news = News::where('slug', '=', $slug)->first();
		return view('fullnews', compact('news'));

	}

	public function categoriesLink($slug) {
		$category = Category::where('slug', $slug)->first();
		$category_id = $category->id;
		$title = $slug;
		//then get the photos
		$photos = Photo::where('category_id', $category_id)->get();
		return view('album', compact('photos', 'title'));
	}

	public function musicLink($slug) {
		$music = Music::where('slug', $slug)->first();
		return view('playmusic', compact('music'));
	}

}
