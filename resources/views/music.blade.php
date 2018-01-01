
@extends('includes.header')

   @section('title')
    <title>Flyboy Inc :: Music</title>
   @endsection

   @section('pagelink')
    <link href="{{ URL::to('css/music-new.css') }}" rel="stylesheet" />
   @endsection


@section('pageContent')
  <section id="music-player">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

        </div>
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
        <li class="small-logo"><a href="{{ route('user.index') }}"><img src="{{ URL::to('img/flyboy70.png') }}" alt="logo" style="display: inline;"></a></li>
        <li><a href="{{ route('user.news') }}">News</a></li>
        <li><a href="{{ route('user.events') }}">Events</a></li>
        <li><a href="{{ route('user.contact') }}">Contact</a></li>
        <li><a href="#"></a></li>
      </ul>
      <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
  </nav>

  <!--main-nav-end-->

  <section id="music-search">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </section>



  <section id="songs">
    <div class="container">
      <div class="row">
        <h2>SINGLES</h2>
      </div>


      <div class="row wow fadeInLeft delay-05s">

    @if(count($musics) > 0)
      @foreach($musics as $music)
        <div class="col-md-3 col-sm-4">
          <div class="song">
            <img  src="{{$music->image}}" class="img-responsive img-circle">
            <div class="content">
              <a href="{{route('user.musiclink', $music->slug)}}" class="btn btn-primary"><i class="fa fa-play-circle-o" aria-hidden="true"></i>Play</a>
              <a href="{{$music->major_link}}" class="btn btn-primary"><span class="fa fa-shopping-cart"></span> Buy</a>
              <p class="song-title" style="text-transform: uppercase">{{$music->title}}</p>
            </div><hr>
          </div>
        </div>
       @endforeach
      @endif

      </div>
    </div>
  </section>

<!-- start of the album section -->
  @if(count($albums) > 0)
  <section id="albums" style="background-color:#2D2D2D;">
      <div class="container">
          <div class="row">
              <h2 style="color:#fff;">A L B U M S</h2>
          </div>
          @foreach($albums as $album)
          <div class="row wow fadeInLeft delay-05s">
        <div class="col-md-4">
          <div class="album">
            <img src="{{$album->image}}" class="img-fluid">
          </div>
        </div>
        <div class="col-md-8">
          <h5>{{$album->title}}</h5>
          <p><em>{{$album->createDate()->formatLocalized('%A, %d %B %Y')}}.</em></p>
          <p>{{$album->about}}</p>
          <div class="row">
            <p class="col-md-4 col-xs-4" style="margin-top: 3px; color: #95989a; font-size: 15px;">Get album now on</p>
            <p class="col-md-2 col-xs-2"><a href="{{$album->major_link}}" title="Hyperurl"><i class="fa fa-shopping-cart fa-2x"></i></a></p>
            <p class="col-md-2 col-xs-2"><a href="{{$album->spotify_link}}" title="Spotify"><i class="fa fa-spotify fa-2x"></i></a></p>
            <p class="col-md-2 col-xs-2"><a href="{{$album->soundcloud_link}}" title="SoundCloud"><i class="fa fa-soundcloud fa-2x"></i></a></p>
            <p class="col-md-2 col-xs-2"><a href="{{$album->itunes_link}}" title="iTunes"><img class='itunes-img' src="img/itunes.png" alt="itunes" width="28px" height="28px"/></a></p>
          </div>
        </div>

          </div>
              <hr>
          @endforeach
      </div>
  </section>
  @endif

@endsection
