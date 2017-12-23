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
      <div class="news-page col-lg-8">
          <div class="news-post">
              <div class="row">
                  <div class="col-md-5">
                      <a href=""><img class="img-responsive" src="img/sliders/slider-3.jpg" alt=""></a>
                  </div>
                  <div class="col-md-7">
                      <div class="news-desc">
                          <h3>News Headline</h3>
                          <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor, vitae convallis urna. Nulla egestas magna vel massa aliquam, quis placerat massa pretium.Duis semper eros id tempor facilisis.</div>
                          <a href="{{ route('user.news.fullnews') }}" class="btn btn-primary">Full story</a>
                          <p class="news-date"><i class="fa fa-calendar"></i>Friday 13th, April, 2015</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="news-post">
              <div class="row">
                  <div class="col-md-5">
                      <a href=""><img class="img-responsive" src="img/sliders/slider-1.jpg" alt=""></a>
                  </div>
                  <div class="col-md-7">
                      <div class="news-desc">
                          <h3>News Headline</h3>
                          <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor, vitae convallis urna. Nulla egestas magna vel massa aliquam, quis placerat massa pretium.Duis semper eros id tempor facilisis.</div>
                          <a href="fullnews.html" class="btn btn-primary">Full story</a>
                          <p class="news-date"><i class="fa fa-calendar"></i>Friday 13th, April, 2015</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="news-post">
              <div class="row">
                  <div class="col-md-5">
                      <a href=""><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
                  </div>
                  <div class="col-md-7">
                      <div class="news-desc">
                          <h3>News Headline</h3>
                          <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor, vitae convallis urna. Nulla egestas magna vel massa aliquam, quis placerat massa pretium.Duis semper eros id tempor facilisis.</div>
                          <a href="fullnews.html" class="btn btn-primary">Full story</a>
                          <p class="news-date"><i class="fa fa-calendar"></i>Friday 13th, April, 2015</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="news-post">
              <div class="row">
                  <div class="col-md-5">
                      <a href=""><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
                  </div>
                  <div class="col-md-7">
                      <div class="news-desc">
                          <h3>News Headline</h3>
                          <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor, vitae convallis urna. Nulla egestas magna vel massa aliquam, quis placerat massa pretium.Duis semper eros id tempor facilisis.</div>
                          <a href="fullnews.html" class="btn btn-primary">Full story</a>
                          <p class="news-date"><i class="fa fa-calendar"></i>Friday 13th, April, 2015</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="page">
            <div class="row pull-right">
              <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="news.html">1</a></li>
                <li class="page-item"><a class="page-link" href="news-page-2.html">2</a></li>
                <li class="page-item"><a class="page-link" href="news-page-3.html">3</a></li>
                <li class="page-item"><a class="page-link" href="news-page-2.html">Next</a></li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
      </div>

      <div class="news-page col-lg-3 col-lg-offset-1">
        <div class="older-news">
          <h3>Older News</h3>
          <div>
            <h4>News Headline</h4>
            <div class="older-post">
                <img src="img/sliders/slider-6.jpg" class="img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor.</p>
                <a href="blog_readmore.html" class="btn btn-primary">Full story</a>
            </div>
          </div>
          <div>
            <h4>News Headline</h4>
            <div class="older-post">
                <img src="img/sliders/slider-6.jpg" class="img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor.</p>
                <a href="blog_readmore.html" class="btn btn-primary">Full story</a>
            </div>
          </div>
          <div>
            <h4>News Headline</h4>
            <div class="older-post">
                <img src="img/sliders/slider-6.jpg" class="img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor.</p>
                <a href="blog_readmore.html" class="btn btn-primary">Full story</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

</body>

</html>
