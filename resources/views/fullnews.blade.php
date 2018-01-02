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
        @if(count($news) > 0)
        <div class="full-story" style='margin-top:25px;'>
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
                        <div class="thumbnail" style="border:0 !important;">
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

        <!-- other news section-->
            <div class="news-page col-lg-3 col-lg-offset-1">
                <div class="older-news">
                    <h3>FOLLOW US </h3>

                    <div>
                        <h4>FACEBOOK</h4>
                        <div class="older-post">
                            <div class="social-divider"></div>
                            <!--facebook timeline -->
                              <div class="fb-like-box"
                                  colorscheme="light" data-height="285"  data-width="190"
                                  data-href="https://www.facebook.com/iamkissdaniel"
                                  data-border-color="#fff" data-show-faces="true"  data-show-border="false"
                                  data-stream="false" data-header="false">
                              </div>
                            <!--facebook timeline ends -->
                        </div>
                    </div>

                    <div>
                        <h4>TWITTER</h4>
                        <div class="older-post">
                            <div class='social-divider'></div>

                            <!-- twitter widget -->
                            <a class="twitter-timeline" href="https://twitter.com/iamkissdaniel?ref_src=twsrc%5Etfw" data-tweet-limit='10'>Tweets by iamkissdaniel</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                            <!--end of twitter widget -->
                        </div>
                    </div>
                </div>
            </div>
        <!--end  of the other news section -->
    </div>
  </div>
@endsection
