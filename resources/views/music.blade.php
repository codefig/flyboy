@extends('includes.header')

@section('title')
    <title>Flyboy Inc :: Music </title>
@endsection

    @section('pagelink')
        <link href="css/music.css" rel="stylesheet" />
    @endsection


@section('pageContent')




  <section id="music-player" style="font-family: 'Open Sans, Lato , sans-serif'">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
          <p>NEW RELEASE!!!</p>
          <h1>LATEST SONG TITLE</h1>
          <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-play-circle-o"></i>PLAY NOW</a>
          <p>Available on iTunes, Cloudshot, <em>OptionTwo</em></p>
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
        <li><a href="">Bio</a></li>
        <li><a href="{{ route('user.music') }}">Music</a></li>
        <li><a href="{{ route('user.photos') }}">Photos</a></li>
        <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
        <li><a href="{{ route('user.videos') }}">Videos</a></li>
        <li><a href="{{ route('user.news') }}">News</a></li>
        <li><a href="{{ route('user.events') }}">Events</a></li>
        <li><a href="{{ route('user.contact') }}">Contact</a></li>
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
        <h2>SINGLES</h2>
      </div>
      <div class="row">
        <div class="grid-item col-md-3">
          <div class="song">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-1.jpg" alt=""></a>
            <div class="song-details">
              <p><i class="fa fa-music"></i>Song Title</p><hr>
              <p><i class="fa fa-music"></i>Album</p><hr>
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
              <p><i class="fa fa-music"></i>Album</p><hr>
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
              <p><i class="fa fa-music"></i>Album</p><hr>
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
              <p><i class="fa fa-music"></i>Album</p><hr>
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
              <p><i class="fa fa-music"></i>Album</p><hr>
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
              <p><i class="fa fa-music"></i>Album</p><hr>
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
              <p><i class="fa fa-music"></i>Album</p><hr>
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
              <p><i class="fa fa-music"></i>Album</p><hr>
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

@endsection
