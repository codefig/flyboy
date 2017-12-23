@extends('includes.header')

    @section('title')
      <title>Flyboy Inc :: Events</title>
    @endsection

    @section('pagelink')
        <link href="{{ URL::to('css/event.css') }}" rel="stylesheet" />
    @endsection


@section('pageContent')



    <header id="event-header">
      <div class="container-fluid">
        <div class="row">
          <h1 class="concert-title">NEW IMMEDIATE EVENT</h1>
          <p class="concert-info">Lines of text like an overview of what the concert is all about goes here.<br/>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
    </header>


    <section class="concert-details">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <p><i class="fa fa-map-marker"></i>The Expo Hall, Eko Hotel and Suites, Victoria Island, Lagos.</p>
          </div>
          <div class="col-md-3">
            <p><i class="fa fa-calendar"></i>Friday 17th, December, 2017.</p>
          </div>
          <div class="col-md-2">
            <p><i class="fa fa-clock-o"></i>7:00pm</p>
          </div>
          <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-lg">GET TICKET</a>
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


    <section class="upcoming-events">
      <div class="container">
          <h2>UPCOMING EVENTS</h2>
        <div class="row">
          <center><div id='dividr' style="background-color:#000;width:50px;height:2px;margin-top: -15px;"></div></center>

        </div>
        <div class="event">
          <div class="row">
            <div class="col-md-3">
              <div class="image-holder" align="center">
                <img src="img/event2.jpg" class="img-responsive"/>
              </div>
            </div>
            <div class="col-md-6">
              <h3>Concert Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate,</p>
              <div class="row">
                <div class="col-md-7">
                  <p><i class="fa fa-map-marker"></i>Eko Hotel and Suites, Victoria Island, Lagos.</p>
                </div>
                <div class="col-md-5">
                  <p><i class="fa fa-calendar"></i>Friday 17th, December, 2017.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg">GET TICKET</a>
            </div>
          </div>
        </div>

        <div class="event">
         <div class="row">
           <div class="col-md-3">
             <div class="image-holder" align="center">
               <img src="img/event2.jpg" class="img-responsive"/>
             </div>
           </div>
           <div class="col-md-6">
             <h3>Concert Title</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate,</p>
             <div class="row">
               <div class="col-md-7">
                 <p><i class="fa fa-map-marker"></i>Eko Hotel and Suites, Victoria Island, Lagos.</p>
               </div>
               <div class="col-md-5">
                 <p><i class="fa fa-calendar"></i>Friday 17th, December, 2017.</p>
               </div>
             </div>
           </div>
           <div class="col-md-3">
             <a href="#" class="btn btn-primary btn-lg">GET TICKET</a>
           </div>
         </div>
        </div>

        <div class="event">
          <div class="row">
            <div class="col-md-3">
              <div class="image-holder" align="center">
                <img src="img/event2.jpg" class="img-responsive" />
              </div>
            </div>
            <div class="col-md-6">
              <h3>Concert Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate,</p>
              <div class="row">
                <div class="col-md-7">
                  <p><i class="fa fa-map-marker"></i>Eko Hotel and Suites, Victoria Island, Lagos.</p>
                </div>
                <div class="col-md-5">
                  <p><i class="fa fa-calendar"></i>Friday 17th, December, 2017.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg">GET TICKET</a>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="row">
            <div class="col-md-3">
              <div class="image-holder" align="center">
                <img src="img/event2.jpg" class="img-responsive" />
              </div>
            </div>
            <div class="col-md-6">
              <h3>Concert Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate,</p>
              <div class="row">
                <div class="col-md-7">
                  <p><i class="fa fa-map-marker"></i>Eko Hotel and Suites, Victoria Island, Lagos.</p>
                </div>
                <div class="col-md-5">
                  <p><i class="fa fa-calendar"></i>Friday 17th, December, 2017.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <a href="#" class="btn btn-primary btn-lg">GET TICKET</a>
            </div>
          </div>
        </div>
    </section>
@endsection