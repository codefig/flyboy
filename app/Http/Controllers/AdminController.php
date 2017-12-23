<?php

namespace App\Http\Controllers;

use App\Event;
use App\Video;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\News;

class AdminController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function logout() {

		Auth::logout();
		return redirect()->route('admin.login');

	}

	public function limit_text($text, $limit) {
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

	public function showaddEvents(Request $request) {
		return view('admin.addevents');
	}

	public function addEvents(Request $request) {
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
		$cover_image = time() . "event-" . $uploaded_image->getClientOriginalName();
		$uploaded_image->move('event-uploads', $cover_image);
		$new_cover_image = "event-uploads/" . $cover_image;

		//create new event record
		$event = Event::create([
			'title' => $request->title,
			'about' => $request->about,
			'location' => $request->location,
			'date' => $request->date,
			'time' => $request->time,
			'image' => $new_cover_image,
		]);
		$event->save();
		Session::flash('success_message', 'Event Added Successfully !');
		return redirect()->back();
	}

	public function showAllEvents(Request $request) {
		$events = Event::paginate(10);
		return view('admin.showevents', compact('events'));
	}

	public function editEvents(Request $request, $id) {
		$event = Event::where('id', $id)->get()->first();

		return view('admin.editevents', compact('event'));
	}

	public function updateEvents(Request $request) {
		/*
			         *  UPDATE EVENT RECORD
		*/
		$event_id = $request->event_id;
		$event = Event::where('id', $event_id)->get()->first();

		$this->validate($request, [
			'title' => 'required',
			'about' => 'required',
			'location' => 'required',
			'date' => 'required',
			'time' => 'nullable',
			'image' => 'nullable|mimes:jpeg,png',
			'ticket_link' => 'nullable',
		]);

		if ($request->image) {

			$updated_image = $request->file('image');
			$new_image = time() . "-event-" . $updated_image->getClientOriginalName();
			$updated_image->move('event-uploads', $new_image);
			$new_image = "event-uploads/" . $new_image;

			$event->update([
				'title' => $request->title,
				'about' => $request->about,
				'location' => $request->location,
				'date' => $request->date,
				'time' => $request->time,
				'image' => $new_image,
				'ticket_link' => $request->ticket_link,
			]);
			Session::flash('success_message', 'Event Updated Successfully !');
		} else {

			$event->update([
				'title' => $request->title,
				'about' => $request->about,
				'location' => $request->location,
				'date' => $request->date,
				'time' => $request->time,
				'ticket_link' => $request->ticket_link,
			]);
			Session::flash('success_message', 'Event Updated Successfully !');
		}
		return redirect()->back();
	}

	public function deleteEvents(Request $request, $id) {
		$event = Event::find($id);
		$event->delete();
		Session::flash('success_message', "Event Deleted Successfully !");
		return redirect()->back();
	}

	//videos functions

	public function showAddVideos(Request $request) {
		return view('admin.addvideos');
	}

	public function addVideos(Request $request) {
//        return $request->all();
		$this->validate($request, [
			'song_title' => 'required',
			'album_title' => 'nullable',
			'image_link' => 'required',
			'upload_link' => 'required',
		]);

		$video = Video::create([
			'song_title' => $request->song_title,
			'album_title' => $request->album_title,
			'image_link' => $request->image_link,
			'upload_link' => $request->upload_link,
			'is_deleted' => 0,
		]);
		$video->save();
		Session::flash('success_message', 'Video added Successully!');
		return redirect()->back();
	}

	public function showAllVideos(Request $request) {
		$videos = Video::where('is_deleted', 0)->paginate(10);
		return view('admin.showvideos', compact('videos'));
	}

	public function editVideos(Request $request, $id) {
		$video = Video::find($id);
		return view('admin.editvideos', compact('video'));
	}

	public function updateVideos(Request $request) {

		$video = Video::find($request->video_id);

		$this->validate($request, [
			'song_title' => 'required',
			'album_title' => 'nullable',
			'image_link' => 'required',
			'upload_link' => 'required',
		]);

		$video->update([
			'song_title' => $request->song_title,
			'album_title' => $request->album_title,
			'image_link' => $request->image_link,
			'upload_link' => $request->upload_link,
		]);

		Session::flash('success_message', 'Video record updated successfully !');
		return redirect()->back();
	}

	public function deleteVideos(Request $request, $id) {
		//delete videos using softDelete
		$video = Video::find($id);
		$video->update(['is_deleted' => 1]);
		Session::flash('success_message', 'Video deleted Successfully !');
		return redirect()->back();
	}

	//news route functions

    public function showAddNews(Request $request){
	    return view('admin.addnews');
    }

    public function addNews(Request $request){
//        return "this is the add news function ";
//        return $request->all();
        $this->validate($request, [
            'headline' => 'required',
            'body' => 'required',
            'image' => 'required',
            'author' => 'nullable',
        ]);

        $uploaded_image = $request->file('image');
        $new_image_name = time() . "-news-" . $uploaded_image->getClientOriginalName();;
        $uploaded_image->move('news-uploads', $new_image_name);
        $new_image_name = "news-uploads/".$new_image_name;


        $news = News::create([
            'headline' => $request->headline,
            'body' => $request->body,
            'image' => $new_image_name,
            'author' => $request->author,
        ]);

        Session::flash('success_message', 'News created Successfully');
        return redirect()->back();


    }

    public function editNews(Request $request, $id){
       $news = News::find($id);
       return view('admin.editnews', compact('news'));
    }

    public function updateNews(Request $request){
        $news_id = $request->news_id;
        $news = News::find($news_id);

        $this->validate($request, [
            'headline' => 'required',
            'body' => 'required',
            'author' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png',
        ]);

        if ($request->image) {

            $updated_image = $request->file('image');
            $new_image = time() . "-news-" . $updated_image->getClientOriginalName();
            $updated_image->move('news-uploads', $new_image);
            $new_image = "news-uploads/" . $new_image;

            $news->update([
                'headline' => $request->headline,
                'body' => $request->body,
                'author' => $request->author,
                'image' => $new_image,
            ]);
            Session::flash('success_message', 'Event Updated Successfully !');

        } else {

            $news->update([
                'headline' => $request->headline,
                'body' => $request->body,
                'author' => $request->author,
            ]);
            Session::flash('success_message', 'Event Updated Successfully !');
        }
        return redirect()->back();
    }

    public function deleteNews(Request $request, $id){
        return "this sithe delete function";
    }

    public function showAllNews(Request $request){
         $all_news = News::paginate(5);
         return view('admin.shownews', compact('all_news'));
//        return "this is the show all news function";
    }


}
