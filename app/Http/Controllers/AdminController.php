<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Video;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\News;
use App\Photo;
use App\Album;
use App\Music;
use App\Email;

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
			'slug' => 'required|min:5|max:255|unique:events,slug',
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
			'slug' => $request->slug,
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
		$former_slug = $event->slug;

		if($request->slug == $former_slug){
            $this->validate($request, [
                'title' => 'required',
                'about' => 'required',
                'location' => 'required',
                'date' => 'required',
                'time' => 'nullable',
                'image' => 'nullable|mimes:jpeg,png',
                'ticket_link' => 'nullable',
            ]);
        }
        else{

            $this->validate($request, [
                'title' => 'required',
                'slug' => 'required|unique:events,slug',
                'about' => 'required',
                'location' => 'required',
                'date' => 'required',
                'time' => 'nullable',
                'image' => 'nullable|mimes:jpeg,png',
                'ticket_link' => 'nullable',
            ]);
        }


        if ($request->image) {

			$updated_image = $request->file('image');
			$new_image = time() . "-event-" . $updated_image->getClientOriginalName();
			$updated_image->move('event-uploads', $new_image);
			$new_image = "event-uploads/" . $new_image;

			$event->update([
				'title' => $request->title,
				'slug' => $request->slug,
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
				'slug' => $request->slug,
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

        $this->validate($request, [
            'headline' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:news,slug',
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
            'slug' => $request->slug,
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
        $former_slug = $news->slug;

        if($request->slug == $former_slug){

            $this->validate($request, [
                'headline' => 'required',
                'body' => 'required',
                'author' => 'nullable',
                'image' => 'nullable|mimes:jpeg,png',
            ]);
        }
        else{
            $this->validate($request, [
                'headline' => 'required',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:news,slug',
                'body' => 'required',
                'author' => 'nullable',
                'image' => 'nullable|mimes:jpeg,png',
            ]);
        }

        if ($request->image) {

            $updated_image = $request->file('image');
            $new_image = time() . "-news-" . $updated_image->getClientOriginalName();
            $updated_image->move('news-uploads', $new_image);
            $new_image = "news-uploads/" . $new_image;

            $news->update([
                'headline' => $request->headline,
                'slug' => $request->slug,
                'body' => $request->body,
                'author' => $request->author,
                'image' => $new_image,
            ]);
            Session::flash('success_message', 'News Updated Successfully !');

        } else {

            $news->update([
                'headline' => $request->headline,
                'slug' => $request->slug,
                'body' => $request->body,
                'author' => $request->author,
            ]);
            Session::flash('success_message', 'News  Updated Successfully !');
        }
        return redirect()->back();
    }

    public function deleteNews(Request $request, $id){
        $news = News::find($id);
        $news->delete();
        Session::flash('success_message', "News Deleted Successfully !");
        return redirect()->back();
    }

    public function showAllNews(Request $request){
         $all_news = News::paginate(5);
         return view('admin.shownews', compact('all_news'));
    }

    //photos category

    public function showAddCategory(Request $request){
        return view('admin.addcategory');
    }

    public function addCategory(Request $request){
        $this->validate($request, [
            'category_name' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:news,slug',
        ]);

        $uploaded_image = $request->file('image');
        $category_image = time(). "-category-". $uploaded_image->getClientOriginalName();
        $uploaded_image->move('albums/categories', $category_image);
        $category_image = "albums/categories/".$category_image;

        $category = Category::create([
            'category_name' => $request->category_name,
            'image' => $category_image,
            'slug' => $request->slug,
            'is_deleted' => 0,
        ]);

        $category->save();
        Session::flash('success_message', 'Category Added Successfully');
        return redirect()->back();

    }

    public function showAllCategory(Request $request){
       $categories = Category::where('is_deleted', 0)->get();
       return view('admin.showcategory', compact('categories'));
    }

    public function editCategory(Request $request, $id){
        $category  = Category::find($id);
        return view('admin.editcategory', compact('category'));
    }

    public function updateCategory(Request $request){
        $category  = Category::find($request->category_id);
        $former_slug = $category->slug;

        if($request->slug == $former_slug){
            $this->validate($request, [
                'category_name' => 'required',
                'image' => 'nullable',
            ]);
        }
        else{
            $this->validate($request, [
                'category_name' => 'required',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:categories,slug',
                'image' => 'nullable',
            ]);
        }


        if ($request->image) {

            $updated_image = $request->file('image');
            $new_image = time() . "-category-" . $updated_image->getClientOriginalName();
            $updated_image->move('albums/categories', $new_image);
            $new_image = "albums/categories/" . $new_image;

            $category->update([
                'category_name' => $request->category_name,
                'slug' => $request->slug,
                'image' => $new_image,
            ]);
            Session::flash('success_message', 'Category Updated Successfully !');

        } else {

            $category->update([
                'category_name' => $request->category_name,
                'slug' => $request->slug,
            ]);
            Session::flash('success_message', 'Category Updated Successfully !');
        }
        return redirect()->back();
    }


    public function deleteCategory(Request $request, $id){
        $category = Category::find($id);
        $category->delete();
        Session::flash('success_message', 'Category deleted Successfully ');
        return redirect()->back();
    }


    //photos
    public function showAddPhotos(Request $request){
        $categories = Category::where('is_deleted',0)->get();
        return view('admin.showaddphotos', compact('categories'));
    }

    public function addPhotos(Request $request){
        $this->validate($request, [
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,png',
        ]);

        $uploaded_image = $request->file('image');
        $category_image = time(). "-photos-". $uploaded_image->getClientOriginalName();
        $uploaded_image->move('albums/photos', $category_image);
        $category_image = "albums/photos/".$category_image;

        $photo = Photo::create([
            'category_id' => $request->category_id,
            'image' => $category_image,
        ]);

        $photo->save();
        Session::flash('success_message', 'Category Added Successfully');
        return redirect()->back();


    }

    public function editPhotos(Request $request, $id){
        $photo = Photo::find($id);
        $categories = Category::all();
        return view('admin.editphotos', compact('photo', 'categories'));
    }

    public function updatePhotos(Request $request){
       $photo = Photo::find($request->photo_id);
       $this->validate($request, [
           'category_id' => 'required',
       ]);

       $photo->update([
           'category_id' => $request->category_id,
       ]);
       Session::flash('success_message', 'Photo record Updated successfully !');
       return redirect()->back();

    }

    public function showAllPhotos(Request $request){
        $photos = Photo::paginate(10);
        return view('admin.showallphotos', compact('photos'));
    }

    //music album routes
    public function showAddAlbum(Request $request){
        return view('admin.addalbum');
    }

    public function addAlbum(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|min:5|max:255|unique:albums,slug',
            'about' => 'required',
            'image' => 'required',
            'major_link' => 'required',
            'soundcloud_link' => 'nullable',
            'itunes_link' => 'nullable',
            'spotify_link' => 'nullable',
        ]);

        $uploaded_image = $request->file('image');
        $category_image = time(). "-albums-". $uploaded_image->getClientOriginalName();
        $uploaded_image->move('albums/music', $category_image);
        $category_image = "albums/music/".$category_image;

        $album = Album::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'about' => $request->about,
            'image' => $category_image,
            'major_link' => $request->major_link,
            'soundcloud_link' => $request->soundcloud_link,
            'itunes_link' => $request->itunes_link,
            'spotify_link' => $request->spotify_link,
        ]);
        Session::flash('success_message', 'Album Created Successfully');
        return redirect()->back();
    }

    public function showAllAlbum(Request $request){
        $albums = Album::all();
        return view('admin.showallalbums', compact('albums'));
    }

    public function editAlbum(Request $request, $id){

        $album = Album::find($id);
        return view('admin.editalbums', compact('album'));
    }

    public function updateAlbum(Request $request){
        $album  = Album::find($request->album_id);
        $former_slug = $album->slug;

        if($request->slug == $former_slug){
            $this->validate($request, [
                'title' => 'required',
                'about' => 'required',
                'image' => 'nullable',
                'major_link' => 'nullable',
                'soundcloud_link' => 'nullable',
                'itunes_link' => 'nullable',
                'spotify_link' => 'nullable',
            ]);
        }
        else{

            $this->validate($request, [
                'title' => 'required',
                'slug' => 'required|min:5|max:255|unique:albums,slug',
                'about' => 'required',
                'image' => 'nullable',
                'major_link' => 'nullable',
                'soundcloud_link' => 'nullable',
                'itunes_link' => 'nullable',
                'spotify_link' => 'nullable',
            ]);
        }


        if ($request->image) {

            $updated_image = $request->file('image');
            $new_image = time() . "-albums-" . $updated_image->getClientOriginalName();
            $updated_image->move('albums/music', $new_image);
            $new_image = "albums/music/" . $new_image;

            $album->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'about' => $request->about,
                'image' => $new_image,
                'major_link' => $request->major_link,
                'soundcloud_link' => $request->soundcloud_link,
                'itunes_link' => $request->itunes_link,
                'spotify_link' => $request->spotify_link,
            ]);
            Session::flash('success_message', 'Album Updated Successfully !');

        } else {

            $album->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'about' => $request->about,
                'major_link' => $request->major_link,
                'soundcloud_link' => $request->soundcloud_link,
                'itunes_link' => $request->itunes_link,
                'spotify_link' => $request->spotify_link,
            ]);

            Session::flash('success_message', 'Album Updated Successfully !');
        }
        return redirect()->back();
    }

    public function deleteAlbum(Request $request, $id){
        $album = Album::find($id);
        $album->delete();
        Session::flash('success_message','Album Deleted Successfully !');
        return redirect()->back();
    }


    //single music routes;
    public function showAddMusic(Request $request){

        $albums = Album::all();
        return view('admin.addmusic', compact('albums'));
    }

    public function addMusic(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'slug' => 'required|min:5|max:255|unique:musics,slug',
            'album_id' => 'nullable',
            'image' => 'required',
            'audio' => 'required',
            'major_link' => 'required',
            'spotify_link'=> 'nullable',
            'soundcloud_link' => 'nullable',
            'itunes_link' => 'nullable',
        ]);

        $updated_image = $request->file('image');
        $new_image = time() . "-albums-" . $updated_image->getClientOriginalName();
        $updated_image->move('albums/music', $new_image);
        $new_image = "albums/music/" . $new_image;

        $song_file = $request->file('audio');
        $new_file = time(). "-music-". $song_file->getClientOriginalName();
        $song_file->move('music-uploads', $new_file );
        $new_file = "music-uploads/".$new_file;

        $music = Music::create([
            'title' => $request->title,
            'text' => $request->text,
            'slug' => $request->slug,
            'album_id' => $request->album_id,
            'image' => $new_image,
            'audio' => $new_file,
            'major_link' => $request->major_link,
            'spotify_link' => $request->spotify_link,
            'soundcloud_link' => $request->soundcloud_link,
            'itunes_link' => $request->itunes_link
        ]);

        $music->save();
        Session::flash('success_message', 'Music Added Successfully !');
        return redirect()->back();
    }

    public function showAllMusic(Request $request){
        $musics = Music::orderBy('id', 'desc')->get();
        return view('admin.showallmusic', compact('musics'));
    }

    public function editMusic(Request $request, $id){
        $music = Music::find($id);
        return view('admin.editmusic', compact('music'));
    }

    public function updateMusic(Request $request){
        $music = Music::find($request->music_id);
        $former_slug = $music->slug;

        if($request->slug == $former_slug){
            $this->validate($request, [
                'title' => 'required',
                'text' => 'required',
                'image' => 'nullable',
                'major_link' => 'nullable',
                'soundcloud_link' => 'nullable',
                'itunes_link' => 'nullable',
                'spotify_link' => 'nullable',
            ]);
        }
        else{

            $this->validate($request, [
                'title' => 'required',
                'text' => 'required',
                'slug' => 'required|min:5|max:255|unique:musics,slug',
                'image' => 'nullable',
                'major_link' => 'nullable',
                'soundcloud_link' => 'nullable',
                'itunes_link' => 'nullable',
                'spotify_link' => 'nullable',
            ]);
        }

        if ($request->image) {

            $updated_image = $request->file('image');
            $new_image = time() . "-music-" . $updated_image->getClientOriginalName();
            $updated_image->move('albums/music', $new_image);
            $new_image = "albums/music/" . $new_image;

            $music->update([
                'title' => $request->title,
                'text' => $request->text,
                'slug' => $request->slug,
                'image' => $new_image,
                'major_link' => $request->major_link,
                'soundcloud_link' => $request->soundcloud_link,
                'itunes_link' => $request->itunes_link,
                'spotify_link' => $request->spotify_link,
            ]);
            Session::flash('success_message', 'Music Updated Successfully !');

        } else {
            $music->update([
                'title' => $request->title,
                'text' => $request->text,
                'slug' => $request->slug,
                'major_link' => $request->major_link,
                'soundcloud_link' => $request->soundcloud_link,
                'itunes_link' => $request->itunes_link,
                'spotify_link' => $request->spotify_link,
            ]);

            Session::flash('success_message', 'Music Updated Successfully !');
        }
        return redirect()->back();


    }

    public function deleteMusic(Request $request, $id){
        $music = Music::find($id);
        $music->delete();
        Session::flash('success_message', 'Music deleted Successfully !');
        return redirect()->back();
    }

    public function showEmails(Request $request){

        $emails = Email::orderBy('id', 'desc')->paginate(20);
        return view('admin.showallemails', compact('emails'));
    }
}
