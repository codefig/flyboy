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


  <section id="video-player">
    <div class="container-fluid">
      <div class="row">
        <h1>THE VIDEO PLAYER TAKES THIS DIV</h1>
      </div>
    </div>
  </section>



  <section id="videos">
    <div class="container">
      <div class="row">
          <h2>VIDEOS</h2>
      </div>
      <div class="row">

        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#">
              <img class="img-responsive" src="http://img.youtube.com/vi/qtQgbdmIO30/0.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="https://www.youtube.com/embed/qtQgbdmIO30?autoplay=true" class="btn btn-primary videolightbox"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>

           <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>


        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-4.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-1.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-4.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row load-more-videos">
        <a href="" class="btn btn-primary">Load more videos</a>
      </div>
    </div>
  </section>
@endsection


@section('baseScript')
  <script type="text/javascript">
      $('.videolightbox').simpleLightbox();
  </script>
@endsection
