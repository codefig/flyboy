@extends('includes.header')

   @section('title')
    <title>Flyboy Inc :: Gallery </title>
   @endsection
   @section('pagelink')
      <link href="{{ URL::to('css/gallery.css') }}" rel="stylesheet" />
    @endsection

@section('pageContent')

  <header id="photolery-header">
    <div class="container-fluid">
      <div class="row">
        <h1 class="btn btn-lg animated fadeInDown">GALLERY</h1>
        <p>See photos</p>
        <p class="wow fadeInDown infinite" data-wow-duration="3s">
          <a href="#photo-album" style="color:#f2c053;border-radius:5px;border-color:#000"><i class="fa fa-angle-double-down"></i></a></p>
      </div>
    </div>
  </header>

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
        <li><a href="{{ route('user.contact') }}"></a></li>
      </ul>
      <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
  </nav>
  <!--main-nav-end-->

  <section class="photo-album">
    <div class="container">
      <div class="row">
        <h3 id="photo-album" style="color:#000;font-size:20px;">PHOTO ALBUMS</h3>
        <center>
        <div class="album-divider" style="width:50px;height:4px;background-color: #f2c053;"></div>
      </center>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="album">
              <img src="img/kiss-5.jpg" class="img-responsive" class="image">
              <div class="overlay">
                <div class="text">
                  <p>45 photos<br><hr></p>
                  <a href="{{ route('user.showphotos') }}">
                  <p>PERSONAL PHOTOS</p>
                </a>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="album">
              <img src="img/album-1.jpg" class="img-responsive" class="image">
              <div class="overlay">
                <div class="text">
                  <p>17 photos<br><hr></p>
                  <p>FEATURED PHOTOS</p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="album">
              <img src="img/album-2.jpg" class="img-responsive" class="image">
              <div class="overlay">
                <div class="text">
                  <p>33 photos<br><hr></p>
                  <p>CONCERT PHOTOS</p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="album">
              <img src="img/album-5.jpg" class="img-responsive" class="image">
              <div class="overlay">
                <div class="text">
                  <p>10 photos<br><hr></p>
                  <p>RIDES</p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="album">
              <img src="img/album-3.jpg" class="img-responsive" class="image">
              <div class="overlay">
                <div class="text">
                  <p>3 photos<br><hr></p>
                  <p>ALBUM ART</p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="album">
              <img src="img/album-4.jpg" class="img-responsive" class="image">
              <div class="overlay">
                <div class="text">
                  <p>20 photos<br><hr></p>
                  <p class="album-name">HOME</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
