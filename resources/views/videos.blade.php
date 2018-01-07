@extends('includes.header')

    @section('title')
    <title>Flyboy Inc :: Videos </title>
    @endsection

    @section('pagelink')
    <link href="{{ URL::to('css/video.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('css/simplelightbox.css') }}" rel="stylesheet" />
    @endsection

    @section('pagescript')
      <script src="{{ URL::to('js/simplelightbox.js') }}"></script>
    @endsection


  @section('pageContent')



      <section id="video-player">
          <div class="container-fluid">
              <div class="row">
              </div>
          </div>
      </section>


      <nav class="main-nav-outer" id="test">
          <!--main-nav-start-->
          <div class="container">
              <ul class="main-nav">
                  <li><a href="{{ route('user.bio') }}">Bio</a></li>
                  <li><a href="{{ route('user.music') }}">Music</a></li>
                  <li><a href="{{ route('user.photos') }}">Photos</a></li>
                  <li><a href="{{ route('user.videos') }}">Videos</a></li>
                  <li class="small-logo"><a href="{{ route('user.index') }}"><img src="{{ URL::to('img/flyboy70.png') }}" alt="logo"></a></li>
                  <li><a href="{{ route('user.news') }}">News</a></li>
                  <li><a href="{{ route('user.events') }}">Events</a></li>
                  <li><a href="{{ route('user.contact') }}">Contact</a></li>
                  <li><a href=""></a></li>
              </ul>
              <a class="res-nav_click" href="#"><i class="fa-bars" style="color:#f2c053;"></i></a>
          </div>
      </nav>
      <!--main-nav-end-->



  <section id="videos">
    <div class="container">
      <div class="row">
        <div>
          <h2>VIDEOS</h2>
          <center><div class="album-divider" style="width:50px;height:4px;background-color: #f2c053;margin-bottom: 3vh;"></div></center>
        </div>
      </div>
      <div class="row">

        @if(count($videos) > 0)
          @foreach($videos as $video)
            <div class="col-sm-6 col-md-4">
              <div class="video">
                <a href="#">
                  <img class="img-responsive" src="{{$video->image_link}}" alt="{{$video->song_title}}"></a>

                <div class="video-details">
                  <h3>{{$video->song_title}}</h3>
                  <p>{{ $video->album_title }}</p>
                </div>
                <div class="row play-video">
                  <a href="{{$video->upload_link}}" class="btn btn-primary videolightbox"><i class="fa fa-play-circle-o"></i>Watch Video</a>
                </div>
              </div>
            </div>
          @endforeach
        @endif

      </div>

    </div>
  </section>
@endsection


@section('baseScript')
  <script type="text/javascript">
      $('.videolightbox').simpleLightbox();
  </script>
@endsection
