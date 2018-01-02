<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flyboy Inc :: Homepage</title>

    <link href="{{ URL::to('css/home.css') }}" rel="stylesheet" />

  <link href="{{URL::to("css/bootstrap.css")}}" rel="stylesheet" type="text/css">
  <link href="{{URL::to("css/style.css")}}"  rel="stylesheet" type="text/css">
  <link href="{{URL::to("css/font-awesome.css")}}"  rel="stylesheet" type="text/css">
  <link href="{{URL::to("css/responsive.css")}}"  rel="stylesheet" type="text/css">
  <link href="{{URL::to("css/animate.css")}}"  rel="stylesheet" type="text/css">
  <link href="{{URL::to("css/baguetteBox.min.css")}}"  rel="stylesheet" type="text/css">
  <link href="{{URL::to("css/simplelightbox.css")}}"  rel="stylesheet" type="text/css">

  <script type="text/javascript" src="{{ URL::to("js/jquery.1.8.3.min.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/bootstrap.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery-scrolltofixed.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.easing.1.3.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.isotope.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/wow.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/classie.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/baguetteBox.min.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.backstretch.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/simplelightbox.js")}}"></script>
   <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

</head>

<body>



  <header class="header" id="header">
    <!--header-start-->
    <div class="container">
      <figure class="logo animated fadeInDown delay-07s">
        <a href="#"><img src="{{ URL::to("img/flyboy_home_logo.png")}}" alt=""></a>
      </figure>
      <h1 class="wow fadeInDown delay-07s">Welcome To Flyboy Incorporated. </h1>
      <ul class="we-create animated fadeInUp delay-1s">

      </ul>
      <a class="link animated fadeInUp delay-1s servicelink" href="#bio">Get Started</a>
    </div>
  </header>
  <!--header-end-->


  <nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container">
      <ul class="main-nav">
        <li><a href="{{ route('user.bio') }}">Bio</a></li>
        <li><a href="{{ route('user.music') }}">Music</a></li>
        <li><a href=" {{ route('user.photos') }}">Photos</a></li>
        <li><a href="{{ route('user.videos') }}">Videos</a></li>
        <li class="small-logo"><a href="#header"><img src="{{ URL::to("img/flyboy_navbar.png")}}" alt=""></a></li>
        <li><a href="{{ route('user.news') }}">News</a></li>
        <li><a href="{{ route('user.events') }}">Events</a></li>
        <li><a href="{{ route('user.contact') }}">Contact</a></li>
      </ul>
      <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
  </nav>
  <!--main-nav-end-->

    <!--BIO-->
    <section id="bio">
      <div class="container">
        <div class="row">
          <div class="section-title"><span class="title-other-words"></span></div>
        </div>

        <div class="row">
          <div class="col-md-7 col-sm-5">
              <div class="row">
                <div class="col-md-12">
                  <div class="title">BIO </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 wow fadeInLeft delay-05s">
                  <p class="bio">
                    Anidugbe Oluwatobiloba Daniel, known as Kiss Daniel, is a Nigerian recording artist, performer and entertainer best known for his chart-topping single "Woju". Formally signed to G-Worldwide Entertainment in 2013, he left the company in November 2017 to create his own record label, Fly Boy Inc.
                   </p>
                  <br>
                  <p class="bio">
                    Kiss Daniel was born Oluwatobiloba Daniel Anidugbe in Ogun State, Nigeria. He hails from Abeokuta North, a local government area in Ogun State. He graduated from the Federal University of Agriculture, Abeokuta (FUNAAB), in 2013, with a degree in Water Resources Management and Agrometeorology (Water Engineering). While at FUNAAB, he decided to pursue music as a career alongside his studies.
                  </p>
                  <br>
                  <p class="bio">
                    Kiss Daniel showed an interest in music from an early age, and was encouraged by his father. He started his music career professionally 2013 after his tertiary education, when he came across G-Worldwide Entertainment CEO, Emperor Geezy. After being signed to G-Worldwide entertainment, he released his first official single "Shoye" which was produced by Beatburx on May 1, 2014, along with a music video was directed by MEX.
                  </p>
                  <br/>
                  <p class="bio">
                    Daniel released his second single "Woju", produced by DJ Coublon on September 1, 2014. The video for Woju was directed by Adasa Cookey, shot in Lagos, Nigeria. The song spent eleven weeks on the MTV Base Official Naija Top Ten, including six weeks at the number one spot.
                  </p>
                  <br>
                  <p class="bio">
                    Daniel then recorded and released a remix of "Woju" featuring Tiwa Savage and Davido. "Woju" and its remix peaked at Number 1 and Number 2 respectively on the MTV Base Official Naija Top 10, the first time that an original song and its remix would peak at the first and second positions on the chart. A cover of the song performed by 2face Idibia appeared online.
                  </p>
                  <br/>
                  <p class="bio">
                    In May 2015, Daniel released a third follow up single "Laye" on his birthday, along with a video two weeks later which was shot in different locations in eastern part of Africa and was directed by AJE FILMS. In September 2015, Daniel won two awards within the space of three weeks.
                  </p>
                  <br>
                </div>
              </div>
              <a href="{{ route('user.bio') }}"><button class="btn btn-primary">Continure reading</button></a>
          </div>

          <div class="col-md-5 col-sm-7">
            <div class="thumbnail wow fadeInRight delay-05s">
              <img src="img/bio.jpg" class="new-album-art" alt="The New Album Art" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--FEATURED GALLERY IMAGES-->
    <section id="gallery-images" class="wow fadeInLeft delay-07s">
      <div id="grey">
        <div class="container">
        <div class="row">
          <div class="section-title">Featured <span class="title-other-words">Gallery Images</span></div>
          <center><div class="divider-grey"></div></center>
        </div>
      	<div class="row no-gutters">
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-1.jpg" />
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-2.jpg" />
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-3.jpg" />
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-4.jpg" />
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-5.jpg" />
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-6.jpg" />
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-7.jpg" />
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-8.jpg" />
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-9.jpg" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-5">
            <a href="{route('user.photos')}}" class="btn btn-primary btn-md">View More Images</a>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--ALBUM RELEASE-->
    <section id="album-release" class="">
      <div class="container">
        <div class="row">
          <div class="section-title">Music<span class="title-other-words"></span></div>
          <center><div class="divider-white"></div></center>
        </div>

        @if(count($latest_music) > 0)
            @foreach ($latest_music as $music)
          <div class="row">
            <div class="col-md-5 wow fadeInLeft delay-05s">
              <img src="{{ URL::to($music->image) }}" class="new-album-art" alt="The New Album Art" />
            </div>
            <div class="col-md-7 wow fadeInRight delay-05s">
                <div class="row">
                  <div class="col-md-12">
                    <div class="album-title">
                      <h3>{{ $music->title }}</h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p class="album-release-date"><i class="fa fa-calendar"></i>{{ $music->createDate()->formatLocalized('%d %b %Y') }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p class="about-album">{{ $music->text }}.</p>

                  </div>
                </div>
                <div class="row get-album">
                  <div class="col-xs-4"><p style="font-family:'Segoe UI';">Album is available on</p></div>
                  <div class="col-xs-2"><a href="{{ $music->major_link }}"><i class="fa fa-2x fa-shopping-cart"></i></a></div>
                  <div class="col-xs-2"><a href="{{ $music->soundcloud_link }}"><i class="fa fa-2x fa-soundcloud"></i></a></div>
                  <div class="col-xs-2"><a href="{{ $music->spotify_link }}"><i class="fa fa-2x fa-spotify"></i></a></div>
                  <div class="col-xs-2"><a href="{{ $music->itunes_link }}"><i class="fa fa-2x fa-apple"></i></a></div>

                </div>
            </div>

            @endforeach
          @endif
          <a href="{{route('user.music') }}"><button class="btn btn-primary">More music</button></a>
        </div>
      </div>
    </section>




    <!--VIDEO-->
    <section id="video" class="wow fadeInUp delay-05s">
      <div id="grey">
        <div class="container">
        <div class="row">
          <div class="section-title">Latest <span class="title-other-words">Music Video</span></div>
          <center><div class="divider-grey"></div></center>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            @if(count($latest_video) > 0)
              @foreach($latest_video as $video)

              <a href="{{ $video->upload_link }}" id="videoLink">
              <div class="video-player">
                <img src="{{ $video->image_link }}" style="margin-left:auto;margin-right:auto;display:block;width:inherit;" class="img-responsive">
              </div>
              </a>

              @endforeach
            @endif

            <span class="clearfix"></span><hr>
            <a href="{{ route('user.videos') }}"><button class="btn btn-primary">See more videos</button></a>
          </div>
        </di>
      </div>
      </div>
    </section>

    <!--NEWS SECTION-->
    <section id="news">
      <div id="white">
        <div class="container">
        <div class="row wow fadeInLeft delay-05s">
          <div class="section-title">Latest <span class="title-other-words">News</span></div>
          <center><div class="divider-grey"></div></center>
        </div>

        <div class="row">

          @if(count($latest_news) > 0)
            @foreach ($latest_news as $news)

          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="{{ URL::to($news->image) }}" />
              <div class="news">
                <div class="news-headline" style="text-transform:uppercase;">{{ $news->limit_headline(5) }}</div>
                <div class="news-date"><i class="fa fa-calendar"></i>{{ $news->createDate()->formatLocalized('%A, %d %B %Y') }}.</div>
                <p class="news-text">{{ $news->limit_text(20) }}</p>
                <a href="{{ route('user.newslink', $news->slug) }}" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
            @endforeach
          @endif

        </div>
      </div>
      </div>
    </section>

    <!--TOURS AND EVENTS -->
    <section id="events" class="">
      <div id="grey">
        <div class="container wow fadeInRight delay-04s">
        <div class="row">
          <div class="section-title"><span class="title-other-words">Events</span></div>
          <center><div class="divider-grey"></div></center>
        </div>

        @if(count($latest_events) > 0)
           @foreach($latest_events as $event)
            <div class="row">
              <div class="col-md-4"><p class="p-textillate" data-in-effect="fadeIn">{{ $event->createDate()->formatLocalized('%A, %d %B %Y') }}.</p></div>

              <div class="col-md-4"><p class="p-textillate" data-in-effect="fadeInLeftBig" data-in-sequence="true">{{ $event->title }}</p></div>

              <div class="col-md-4"><p class="p-textillate" data-in-effect="fadeIn">{{ $event->location }}</p></div>
            </div><hr>

           @endforeach
        @endif


      </div>
      </div>
    </section>


    <!--CONTACT US-->
    <section id="contact">
      <div id="grey">
        <div class="container wow fadeInUp delay-05s">
        <div class="row">
          <div class="section-title">Contact <span class="title-other-words">Us</span></div>
          <center><div class="divider-grey"></div></center>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>Leave a message</p>
            <input type="text" placeholder="Name" value="" /><br>
            <input type="text" placeholder="Email" value="" /><br>
            <textarea placeholder="Your message goes here"></textarea><br>
            <button class="btn btn-primary btn-lg">Send</button>
          </div>
          <div class="col-md-5 col-md-offset-1">
            <p>Bookings and enquiries</p>
            <p class="enquiry"><i class="fa fa-envelope"></i>bookings@flyboyinc.net</p>
            <p class="enquiry"><i class="fa fa-phone"></i>+234 906 0001 078</p>

            <p style="margin-top: 15px;">Follow us on Facebook, Instagram and Twitter.</p>
            <p class="social-media">
              <a href="https://www.youtube.com/KissDanielVEVO"><i class="fa fa-youtube"></i></a>
              <a href="https://www.instagram.com/iamkissdaniel"><i class="fa fa-instagram"></i></a>
              <a href="https://www.twitter.com/iamkissdaniel"><i class="fa fa-twitter"></i></a>

              <div style="margin-top:5px;" class="fb-like-box"
                                  colorscheme="light" data-height="285"  data-width="190"
                                  data-href="https://www.facebook.com/iamkissdaniel"
                                  data-border-color="#fff" data-show-faces="true"  data-show-border="false"
                                  data-stream="false" data-header="false">
                              </div>

            </p>
          </div>
        </div>
      </div>
      </div>
    </section>

    <footer class="footer">
    <div class="container">
      <div class="footer-logo"><a href="#"><img src="{{ URL::to('img/flyboy_footer.png') }}" alt=""></a></div>
      <span class="copyright">&copy; 2018 Flyboy Incorporated. All Rights Reserved</span>
      <div class="credits">

        <a href="" style="color:#f2c053;">Flyboy Incorporated</a> by <a href="">GeeksLab</a>
      </div>
    </div>
  </footer>



     <script>

    var image1 = "{{ URL::to('img/slider1.jpg')}}";
    var image2 = "{{ URL::to('img/slider2.jpg')}}";
    var image5 = "{{ URL::to('img/slider7.jpg')}}";
   $(function() {
            $("#header").backstretch([
              image1,
              image2,
              image5,

              ], {
                 fade: 800,
                 duration: 4000
            });
         });
        $('#videoLink').simpleLightbox();

      </script>






  <script type="text/javascript">
    $(document).ready(function(e) {
      $('#test').scrollToFixed();
      $('.res-nav_click').click(function() {
        $('.main-nav').slideToggle();
        return false

      });

    });
  </script>

  <script>
    wow = new WOW({
      animateClass: 'animated',
      offset: 100
    });
    wow.init();
  </script>

  <script>
    baguetteBox.run('.flyboy-gallery');
  </script>


  <script type="text/javascript">
    $(window).load(function() {

      $('.main-nav li a, .servicelink').bind('click', function(event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 102
        }, 1500, 'easeInOutExpo');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        if ($(window).width() < 768) {
          $('.main-nav').hide();
        }
        event.preventDefault();
      });
    })
  </script>

  <script type="text/javascript">
    $(window).load(function() {


      var $container = $('.portfolioContainer'),
        $body = $('body'),
        colW = 375,
        columns = null;


      $container.isotope({
        // disable window resizing
        resizable: true,
        masonry: {
          columnWidth: colW
        }
      });

      $(window).smartresize(function() {
        // check if columns has changed
        var currentColumns = Math.floor(($body.width() - 30) / colW);
        if (currentColumns !== columns) {
          // set new column count
          columns = currentColumns;
          // apply width to container manually, then trigger relayout
          $container.width(columns * colW)
            .isotope('reLayout');
        }

      }).smartresize(); // trigger resize to set container width
      $('.portfolioFilter a').click(function() {
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

          filter: selector,
        });
        return false;
      });

    });
  </script>

</body>

</html>
