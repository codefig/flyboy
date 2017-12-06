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

		return "this is the music pag";
	}

	public function photos() {
		/**
		 *  The photos url
		 */

		return view('album');
	}

	public function videos() {
		return "this is the link for videso ";
	}

	public function news() {
		return "this si the function for the news";
	}

	public function events() {
		return "the events page";
	}

	public function contact() {
		return "this is the contact page";
	}
}
