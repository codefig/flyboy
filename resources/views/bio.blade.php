@extends('includes.header')

    @section('title')
      <title>Flyboy Inc :: Bio</title>
    @endsection

    @section('pagelink')
      <link href="{{ URL::to('css/bio-readmore.css') }}" rel="stylesheet" />
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


  <section id="bio-readmore">
    <div class="container">
      <div class="row">
        <div class="title" style="margin-top: 50px;">
          <h2>BIO</h2>
          <center>
              <div style="height:2px;background-color:#000;width:25px;margin-top:-40px;margin-bottom:50px;" class="divider"></div>
        </center>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="image">
            <img class="img-responsive" src="{{ URL::to('img/sliders/slider-2.jpg') }}" alt="Image goes here" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
          <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
          <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
          <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
        </div>
      </div>
      <hr>

    </div>
  </section>

@endsection
