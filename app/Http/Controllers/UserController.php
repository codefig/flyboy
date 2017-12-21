<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

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
		// return view('dashboard');
		return view('index');
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

		return view('music');
		// return view('music-backup');
	}

	public function photos() {
		/**
		 *  The photos url
		 */
		return view('gallery');
	}

	public function showphotos() {
		return view('album');
	}

	public function videos() {
		return view('videos');
	}

	public function news() {
		return view('news');
	}

	public function fullnews() {
		return view('fullnews');
	}

	public function events() {
		// return "the events page";
		return view('events');
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
}
