@extends('includes.header')

    @section('title')
    <title>Flyboy Inc :: News </title>
    @endsection

    @section('pagelink')
    <link href="{{ URL::to('css/news.css') }}" rel="stylesheet" />
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


  <div class="container">
    <div class="row">
        @if(count($news) > 0)
        <div class="full-story">
          <div class="col-lg-8">
            <div class="row">

                      <div class="col-md-8">
                          <h2>{{$news->headline}}</h2>
                      </div>
                      <div class="col-md-3 col-md-offset-1">
                          <p class="full-story-date"><i class="fa fa-calendar"></i> {{$news->created_at->formatLocalized('%A, %d %B %Y')}}</p>
                      </div>
              </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <a href=""><img class="img-responsive" src="{{ URL::to($news->image) }}" alt="news-banner"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="news-text">{{$news->body}}</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="author"><i class="fa fa-edit"></i><em>by</em> {{$news->author}}</p>
                    </div>
                </div>
            </div>
          </div>
        @endif


      <div class="news-page col-lg-3 col-lg-offset-1">
        <div class="older-news">
          <h3>Other News</h3>
          <div>
            <h4>News Headline</h4>
            <div class="older-post">
                <img src="{{ URL::to('img/sliders/slider-3.jpg') }}"  class="img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor.</p>
                <a href="blog_readmore.html" class="btn btn-primary">Full story</a>
            </div>
          </div>
          <div>
            <h4>News Headline</h4>
            <div class="older-post">
                <img src="{{ URL::to('img/sliders/slider-3.jpg') }}"  class="img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor.</p>
                <a href="blog_readmore.html" class="btn btn-primary">Full story</a>
            </div>
          </div>
          <div>
            <h4>News Headline</h4>
            <div class="older-post">
                <img src="{{ URL::to('img/sliders/slider-3.jpg') }}"  class="img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor.</p>
                <a href="blog_readmore.html" class="btn btn-primary">Full story</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
