<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function limit_text($text, $limit){
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }
	public function showHome(Request $request) {
		return view('admin.home');
	}

	public function showaddEvents(Request $request){
	    return view('admin.addevents');
    }

    public function addEvents(Request $request){
//	    return "this is the addevent submit function ";
//        return $request->all();
        $this->validate($request, [
            'title' => 'required',
            'about' => 'required',
            'location' => 'required',
            'date' => 'required',
            'time' => 'nullable',
            'image' => 'required|mimes:jpeg,png',
            'ticket-link' => 'nullable',
        ]);

        //after validation upload image
        $uploaded_image = $request->file('image');
        $cover_image = time()."event-".$uploaded_image->getClientOriginalName();
        $uploaded_image->move('events',$cover_image);
        $new_cover_image = "events/".$cover_image;

        //create new event record
        $event = Event::create([
            'title' => $request->title,
            'about' => $request->about,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'image' =>$new_cover_image,
        ]);
        $event->save();
        Session::flash('success_message', 'Event Added Successfully !');
        return redirect()->back();
    }

    public function showAllEvents(Request $request){

        $events = Event::paginate(10);
        return view('admin.showevents', compact('events'));
    }



	public function logout() {
		// return "this is the logout function";
		Auth::logout();
		return redirect()->route('admin.login');

	}
}
