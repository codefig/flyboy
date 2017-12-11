@extends('includes.header')

@section('title')
    <title>Flyboy Inc :: Music </title>
@endsection

    @section('pagelink')
        <link href="{{ URL::to('css/music.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('css/musicplayer.css') }}" rel="stylesheet" />
    @endsection


@section('pageContent')




  <section id="music-player" style="font-family: 'Open Sans, Lato , sans-serif'">
    <div class="container">
      <div class="row">

               <div class="col-xs-12 col-md-4" id="song-details-container">
                     <h3 class="album-category"> Album Category : </h3>
                    <h2 class="song-title"> This is the head </h2>
                    <br/>

                    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-play-circle-o"></i>PLAY NOW</a>

                    <p>
                      <a href="#" class="music-link"><span class="fa fa-2x fa-soundcloud"></span></a> &nbsp;
                      <a href="#" class="music-link"><span class="fa fa-2x fa-spotify"></span></a>&nbsp;
                      <a href="#" class="music-link"><span class="fa fa-2x fa-youtube"></span></a>&nbsp;
                      <a href="#" class="music-link"><span class="fa fa-2x fa-apple"></span> iTunes</a>&nbsp;
                    </p>
               </div>
               {{-- <div class="col-md-3"></div> --}}
               <div class="col-xs-12 col-md-8" style="background-color:yellow;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

  <section id="songs" style="background-color:#f5f5f5;">
    <div class="container">
      <div class="row">
        <h3>SINGLES</h3>
      </div>
      <div class="row">
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-1.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-dot-circle-o"></i>Album</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="{{ route('user.playmusic') }}" class=" btn btn-primary"><i class="fa fa"></i>Play Song</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-dot-circle-o"></i>Album</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa"></i>Play Song</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-2.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-dot-circle-o"></i>Album</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa"></i>Play Song</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-dot-circle-o"></i>Album</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa"></i>Play Song</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-dot-circle-o"></i>Album</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa"></i>Play Song</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-3.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-dot-circle-o"></i>Album</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa"></i>Play Song</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-dot-circle-o"></i>Album</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa"></i>Play Song</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-3.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-dot-circle-o"></i>Album</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa"></i>Play Song</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row load-more-songs">
        <a href="" class="btn btn-primary">Load more songs</a>
      </div>
    </div>
  </section>

  <section id="songs" style="background-color:#2D2D2D;">
    <div class="container">
      <div class="row">
        <h2 style="color:#fff;">A L B U M S</h2>
      </div>
      <div class="row">
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Album Title</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa-eye"></i>View Song List</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Album Title</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa-eye"></i>View Song List</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-6">
          <div class="album">
            <div class="row">
              <div class="col-md-8">
                <p>Song One in the Album</p>
              </div>
              <div class="col-md-4">
                <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Play Song</a>
              </div>
            </div><hr>


          </div>
        </div>


      </div>
      <div class="row">
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Album Title</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa-eye"></i>View Song List</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Album Title</p><hr>
              <p><i class="fa fa-calendar"></i>Release Date</p>
            </div>
            <div class="row play-song">
              <a href="#" class=" btn btn-primary"><i class="fa fa-eye"></i>View Song List</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

        <script type="text/javascript" src="js/musicplayer.js"></script>
@endsection
