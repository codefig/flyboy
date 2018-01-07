@extends('includes.header')

@section('title')
    <title>Flyboy Inc :: News </title>
@endsection

@section('pagelink')
    <link href="{{ URL::to('css/event.css') }}" rel="stylesheet" />
@endsection

@section('afterbodyContent')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection

@section('pageContent')
    <header id="event-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            @if(count($latest) > 0)

              <h1 class="concert-title" style="text-transform: uppercase">{{$latest->title}}</h1>
              <p class="concert-info">{{$latest->limit_text(30)}}
              </p>
            @endif
          </div>
        </div>
      </div>
    </header>

    <section class="concert-details">
      <div class="container">
        <div class="row">
          @if(count($latest) > 0)
            <div class="col-md-5">
              <p class="p-latest"><i class="fa fa-map-marker"></i>{{$latest->location}}.</p>
            </div>
            <div class="col-md-3">
              <p class="p-latest"><i class="fa fa-calendar"></i>{{$latest->createDate()->formatLocalized('%A, %d %B %Y')}}.</p>
            </div>
            <div class="col-md-2">
              <p class="p-latest"><i class="fa fa-clock-o"></i>{{$latest->time}}</p>
            </div>
            <div class="col-md-2">
              <a href="{{$latest->ticket_link}}" class="btn btn-primary btn-lg ticket-btn">GET TICKET</a>
            </div>
            @endif
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



    <section class="upcoming-events">
      <div class="container">
        <div class="row">
          <h2>UPCOMING EVENTS</h2>
        </div>


        @if(count($events) > 0)

          @foreach($events as $event)
            <div class="event">
              <div class="row">
                <div class="col-md-3">
                  <div class="image-holder" align="center">
                    <img src="{{ URL::to($event->image) }}" class="img-responsive"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 class="event-title">{{$event->title}}</h3>
                  <p> {{ $event->limit_text(50) }}</p>
                  <div class="row">
                    <div class="col-md-7">
                      <p><i class="fa fa-map-marker"></i>{{$event->location}}</p>
                    </div>
                    <div class="col-md-5">
                      <p><i class="fa fa-calendar"></i>{{$event->createDate()->formatLocalized('%A, %d %B %Y')}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <a href="{{ $event->ticket_link }}" class="btn btn-primary btn-lg">GET TICKET</a>
                </div>
              </div>
            </div>
          @endforeach
        @endif


        @if(count($events) > 0)

          <div class="page">
            <div class="row text-center">

                {{ $events->links() }}
            </div>
          </div>
        @endif
      </div>
    </section>
@endsection