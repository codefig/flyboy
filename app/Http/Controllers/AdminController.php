<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function showHome(Request $request) {
		return view('admin.home');
	}

	public function logout() {
		// return "this is the logout function";
		Auth::logout();
		return redirect()->route('admin.login');

	}
}
