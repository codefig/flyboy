@extends('includes.header')

@section('title')
    <title>Flyboy Inc :: Music </title>
@endsection

    @section('pagelink')

        <link href="{{ URL::to('css/musicplayer.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('css/playmusic.css') }}" rel="stylesheet">
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




  <section id="music-player" style="font-family: 'Open Sans, Lato , sans-serif'">
    <div class="container">

      <div class="row">
           <div class="container">

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



  <section style="background-color:#fff;style="60vh">

     <div class="container">
        <div class="row">
            @if(count($music) > 0)
             <div id="musicInfoContainer" style="">
              <div class="col-xs-12 col-md-3">
                 <div id="albumArt">
                     <img class="img-respbumImage" src="{{ URL::to($music->image) }}" alt="Album art">
                 </div>
              </div>


              <div class="col-xs-12 col-md-6">
                   <div id="ratingContainer">
                         <div>
                           <span class='fa fa-star checked'></span>
                           <span class='fa fa-star checked'></span>
                           <span class='fa fa-star checked'></span>
                           <span class='fa fa-star checked'></span>
                           <span class='fa fa-star checked'></span>
                             <span class="">|</span>
                           <span style="text-transform: uppercase"> {{$music->title}}</span>
                         </div>
                         <div class="divider"></div>
                               <div id="playerContainer">
                                  <div>
                                    <div class="audio green-audio-player">
                                      <div class="loading">
                                        <div class="spinner"></div>
                                      </div>
                                      <div class="play-pause-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                                          <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon" id="playPause"/>
                                        </svg>
                                      </div>

                                      <div class="controls">
                                        <span class="current-time">0:00</span>
                                        <div class="slider" data-direction="horizontal">
                                          <div class="progress">
                                            <div class="pin" id="progress-pin" data-method="rewind"></div>
                                          </div>
                                        </div>
                                        <span class="total-time">0:00</span>
                                      </div>

                                      <div class="volume">
                                        <div class="volume-btn">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#566574" fill-rule="evenodd" d="M14.667 0v2.747c3.853 1.146 6.666 4.72 6.666 8.946 0 4.227-2.813 7.787-6.666 8.934v2.76C20 22.173 24 17.4 24 11.693 24 5.987 20 1.213 14.667 0zM18 11.693c0-2.36-1.333-4.386-3.333-5.373v10.707c2-.947 3.333-2.987 3.333-5.334zm-18-4v8h5.333L12 22.36V1.027L5.333 7.693H0z" id="speaker"/>
                                          </svg>
                                        </div>
                                        <div class="volume-controls hidden">
                                          <div class="slider" data-direction="vertical">
                                            <div class="progress">
                                              <div class="pin" id="volume-pin" data-method="changeVolume"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <audio crossorigin src="{{ URL::to($music->audio) }}">
                                      </audio>
                                    </div>
                                  </div><!-- end of the musicplayer button -->
                           </div>

                           <div id="cart-option">
                               <button class="btn btn-default playmusic-btn"><span class="fa fa-music"></span> 1 Track</button>
                               <a href="{{$music->major_link}}" class="btn btn-default playmusic-btn"><span class="fa fa-shopping-cart"></span> Buy</a>
                           </div>
                   </div>
              </div>
                 @endif
              <div class="col-xs-12 col-md-3">
                  <div id="socialMedia">
                   <h3>FOLLOW US </h3>
                    <div class="socialContainers" id="facebookContainer">
                       <h3 class="socialHeaders">Facebook</h3>
                       <div class="social-divider" style="margin-bottom:5px;"></div>
                       <!--facebook timeline -->
                        <div class="fb-like-box"
                             colorscheme="light" data-height="285"  data-width="190"
                             data-href="https://www.facebook.com/iamkissdaniel"
                             data-border-color="#fff" data-show-faces="true"  data-show-border="false"
                             data-stream="false" data-header="false">
                        </div>
                       <!--facebook timeline ends -->
                    </div>

                    <div class="socialContainers" id="twitterContainer">
                      <h3 class="socialHeaders"> Twitter</h3>
                       <div class='social-divider'></div>

                       <!-- twitter widget -->
                        <a class="twitter-timeline" href="https://twitter.com/iamkissdaniel?ref_src=twsrc%5Etfw" data-tweet-limit='5'>Tweets by iamkissdaniel</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                       <!--end of twitter widget -->
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
  </section>





        <script type="text/javascript" src="{{URL::to('js/musicplayer.js')}}"></script>
        <script>
          $('.u-floatLeft').hide();
        </script>
@endsection
