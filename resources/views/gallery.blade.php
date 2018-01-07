@extends('includes.header')

@section('title')
    <title>Flyboy Inc :: Gallery </title>
@endsection
@section('pagelink')
    <link href="{{ URL::to('css/gallery.css') }}" rel="stylesheet"/>
@endsection

@section('pageContent')

    <header id="photolery-header">
        <div class="container">
            <div class="row">
                <h1 class="btn btn-lg animated fadeInDown">GALLERY</h1>
                <p>See photos</p>
                <p class="wow fadeInDown infinite" data-wow-duration="3s">
                    <a href="#photo-album" style="color:#f2c053;border-radius:5px;border-color:#000">
                        <i class="fa fa-angle-double-down"></i>
                    </a>
                </p>
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
                <li class="small-logo"><a href="{{ route('user.index') }}"><img src="{{ URL::to('img/flyboy70.png') }}"
                                                                                alt="logo"></a></li>
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
            <!-- start of the first row -->
            <div class="row">

                @if(count($categories) > 0)
                    @foreach($categories as $category)
                        <div class="col-md-4">
                            <div class="album">
                                <img src="{{URL::to($category->image)}}" class="img-responsive image">
                                <div class="overlay">
                                    <div class="text">
                                        <p>{{$category->photo_count()}}<br>
                                        <hr>
                                        </p>
                                        <a style="color:#000;"
                                           href="{{ route('user.categorieslink', $category->slug) }}">
                                            <p style="text-transform: uppercase">{{$category->category_name}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            @endif

            <!--end of the first row -->


            </div>
    </section>
@endsection
