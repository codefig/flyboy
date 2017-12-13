<?php

namespace App\Http\Controllers;

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
		return view('dashboard');
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
}
