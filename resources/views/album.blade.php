@extends('includes.header')

     @section('title')
        <title>FlyboyInc :: Albums </title>
     @endsection



     @section('pagelink')
        <link href="{{ URL::to('css/album.css')}}" rel="stylesheet" />
      @endsection

@section('pageContent')

      <header id="album-header">
        <div class="container">
          <div class="row">
            <h1 class="btn btn-lg">GALLERY</h1>
              <p style="text-transform: uppercase">{{$title}}</p>
            <p><i class="fa fa-angle-double-down"></i></p>
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

    <section>
      <div class="container photo-container">
         <div style="margin-top:50px;margin-bottom:100px;">
            <h2> {{$title}} </h2>
            <center><div style="background-color:#000;height:2px;width:25px;margin-top: -15px;margin-bottom: 20px;"></div></center>
         </div>
        <div class="row">

       @if(count($photos) > 0)

           @foreach($photos as $photo)
            <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#2">
                  <img src="{{URL::to($photo->image)}}">
                </a>
                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="{{URL::to($photo->image)}}">
                      </div>
                        <div class="col-md-12 description">

                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           @endforeach
          @endif


      </div>
      </div>
    </section>
@endsection
