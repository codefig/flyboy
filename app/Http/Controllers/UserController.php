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
use Illuminate\Support\Facades\Validator;
use App\Email;

class UserController extends Controller
{

    /**
     * Controller for Non Authorised Links for the website
     */

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        /**
         *   The index route link
         */

        $latest_news = News::orderBy('id', 'desc')->take(3)->get();
        $latest_music = Music::orderBy('id', 'desc')->take(1)->get();
        $latest_video = Video::orderBy('id', 'desc')->take(1)->get();
        $latest_events = Event::orderBy('id', 'desc')->take(4)->get();

        return view('index', compact('latest_news', 'latest_music', 'latest_video', 'latest_events'));
    }

    public function bio()
    {
        /**
         *  The bio information link
         */
        // return "this is the bio page";
        return view('bio');
    }

    public function music()
    {
        /**
         *  The music link
         */
        $musics = Music::orderBy('id', 'desc')->get();
        $albums = Album::orderBy('id', 'desc')->get();
        return view('music', compact('musics', 'albums'));
    }

    public function photos()
    {
        /**
         *  The photos url
         */
        $categories = Category::where('is_deleted', 0)->get();

        return view('gallery', compact('categories'));
    }

    public function showphotos()
    {
        return view('album');
    }

    public function videos()
    {
        $videos = Video::orderBy('id', 'desc')->get();
        return view('videos', compact('videos'));
    }

    public function news()
    {

        $news = News::orderBy('id', 'desc')->paginate(10);
        return view('news', compact('news', 'latest_news'));
    }

    public function events()
    {
        //remains pagination
        $latest = Event::first();
        $events = Event::orderBy('id', 'desc')->paginate(10);
        return view('events', compact('events', 'latest'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactus(Request $request){
        if($request->ajax()){
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);
            if($validator->fails()){

                return response()->json(['errors' => $validator->errors()->all()]);
            }
            $email = new Email();
            $email->fullname  = $request->name;
            $email->email  = $request->email;
            $email->message = $request->message;
            $email->ip  = $request->ip();
            $email->save();
            return response()->json(['success' => 'Email sent successfully. Thank you, your message has been delivered ']);
        }else{
                return redirect()->route('error.404');
        }
    }

    public function playmusic()
    {
        // return "this is the play music function ";
        return view('playmusic');
    }

    public function showAdminLogin(Request $request)
    {

        return view('admin.login');
    }

    public function checkAdminLogin(Request $request)
    {
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
    public function newsLink($slug)
    {
        $news = News::where('slug', '=', $slug)->first();
        if(count($news)){
            return view('fullnews', compact('news'));
        }
        else{
            return view('errors.404');
        }

    }

    public function categoriesLink($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category_id = $category->id;
        $title = $slug;
        //then get the photos
        $photos = Photo::where('category_id', $category_id)->get();
        return view('album', compact('photos', 'title'));

    }

    public function musicLink($slug)
    {
        $music = Music::where('slug', $slug)->first();
        if(count($music)){

            return view('playmusic', compact('music'));
        }
        return view('errors.404');
    }

}
