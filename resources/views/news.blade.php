@extends('includes.header')

    @section('title')
    <title>Flyboy Inc :: News </title>
    @endsection

    @section('pagelink')
    <link href="{{ URL::to('css/news.css') }}" rel="stylesheet" />
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
        <h2 style="margin-top:20px;">NEWS</h2>
        <hr>
      <div class="news-page col-lg-8">
          @if(count($news) > 0)
              @foreach($news as $story)
                  <div class="news-post">
                      <div class="row">
                          <div class="col-md-5">
                              <a href=""><img class="img-responsive" src="{{ $story->image }}" alt="{{$story->headline}}"></a>
                          </div>
                          <div class="col-md-7">
                              <div class="news-desc">
                                  <h3>{{$story->headline}}</h3>
                                  <div class="news-text"> {{ $story->limit_text(50) }}</div>
                                  <a href="{{ route('user.newslink', $story->slug) }}" class="btn btn-primary">Full story</a>
                                  <p class="news-date"><i class="fa fa-calendar"></i>{{$story->updated_at->formatLocalized('%A, %d %B %Y')}}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          @endif


              {{$news->links()}}

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
          <h3>FOLLOW US </h3>
          <div>
            <h4>INSTAGRAM</h4>
            <div class="older-post">
                <img src="img/sliders/slider-6.jpg" class="img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non efficitur velit. Duis semper eros id tempor facilisis. Suspendisse molestie nunc at massa iaculis, at iaculis dolor blandit. Pellentesque non pulvinar dolor.</p>
                <a href="blog_readmore.html" class="btn btn-primary">Full story</a>
            </div>
          </div>
          <div>
            <h4>FACEBOOK</h4>
            <div class="older-post">
                <div class="social-divider"></div>
                <!--facebook timeline -->
                <div class="fb-like" data-href="https://web.facebook.com/iamkissdaniel/?ref=br_rs" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                <!--facebook timeline ends -->
            </div>
          </div>
          <div>
            <h4>TWITTER</h4>
            <div class="older-post">
                <div class='social-divider'></div>

                <!-- twitter widget -->
                <a class="twitter-timeline" href="https://twitter.com/iamkissdaniel?ref_src=twsrc%5Etfw">Tweets by iamkissdaniel</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                <!--end of twitter widget -->
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

</body>

</html>
