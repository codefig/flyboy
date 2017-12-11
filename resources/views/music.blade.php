
@extends('includes.header')

   @section('title')
    <title>Flyboy Inc :: Music</title>
   @endsection

   @section('pagelink')
    <link href="{{ URL::to('css/music.css') }}" rel="stylesheet" />
    <link href='{{ URL::to('css/bootstrap.css') }}' rel="stylesheet" />
    <link href="{{ URL::to('css/font-awesome.css') }}" rel="stylesheet" />
   @endsection


@section('pageContent')
  <section id="music-player">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
          <p>NEW RELEASE!!!</p>
          <h1>LATEST SONG TITLE</h1>
          <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-play-circle-o"></i>PLAY NOW</a>

          {{-- <p>Available on iTunes, Cloudshot, <em>OptionTwo</em></p> --}}
          <p>
              <a href="#" title="Soundcloud" class="music-link"><i class="fa fa-2x fa-soundcloud"></i></a> &nbsp;
              <a href="#" title="Spotify" class="music-link"><i class="fa fa-2x fa-spotify"></i></a>&nbsp;
              <a href="#" title="Youtube" class="music-link"><i class="fa fa-2x fa-youtube"></i></a>&nbsp;
              <a href="#" title="iTunes" class="music-link"><i class="fa fa-2x fa-apple"></i>iTunes</a>&nbsp;
          </p>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-5">
          <p><em>The player goes here</em></p>
        </div>
        <div class="col-md-1">
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
          <input type="text" placeholder="Search for song" value="" />
          <a href="#"<i class="fa fa-search"></i></a>
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

      <div class="row">

        <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>

         <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>

         <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>

         <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>

         <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>

         <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>

         <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>

         <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>

        <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>
        <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>
        <div class="col-md-3">
          <div class="song">
            <img src="img/kiss-5.jpg" class="img-responsive img-circle">
            <!-- <div class="center-circle-black"></div>
            <div class="center-circle"></div> -->
            <div class="overlay img-circle">
              <div class="content">
                <a href="#>"<i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
          <p class="song-title">Song Title</p>
          <p class="album-name">ALBUM NAME</p><hr>
        </div>
      </div>

    </div>
  </section>

  <section id="albums" style="background-color:#2D2D2D;">
    <div class="container">
      <div class="row">
        <h2 style="color:#fff;">A L B U M S</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="album">
            <img src="{{URL::to('img/album-art/album-art4.jpg') }}" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4">
          <h5>ALBUM TITLE</h5>
          <p><em>Release Date</em></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4 album-songs">
          <h5>SONGS IN ALBUM</h5>
          <div class="album-songs-list">
            <!--A song being listed from the album. -->
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>1</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>2</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>3</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>4</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>5</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-4">
          <div class="album">
            <img src="{{ URL::to('img/album-art/album-art1.jpg') }}" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4">
          <h5>ALBUM TITLE</h5>
          <p><em>Release Date</em></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumlorem
          lor.</p>
        </div>
        <div class="col-md-4 album-songs">
          <h5>SONGS IN ALBUM</h5>
          <div class="album-songs-list">
            <!--A song being listed from the album. -->
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>1</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>2</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>3</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>4</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>5</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="album">
            <img src="{{ URL::to('img/album-art/album-art3.jpg') }}" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4">
          <h5>ALBUM TITLE</h5>
          <p><em>Release Date</em></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4 album-songs">
          <h5>SONGS IN ALBUM</h5>
          <div class="album-songs-list">
            <!--A song being listed from the album. -->
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>1</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>2</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>3</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>4</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
            <div class="song">
              <div class="row">
                <div class="col-xs-1">
                  <p>5</p>
                </div>
                <div class="col-xs-6">
                  <p>Song Title</p>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-2">
                  <a href="#"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
