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

    <script type="text/javascript" src="{{ URL::to("js/jquery.1.8.3.min.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/bootstrap.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery-scrolltofixed.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.easing.1.3.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.isotope.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/wow.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/classie.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/baguetteBox.min.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.backstretch.js")}}"></script>
</head>

<body>



  <header class="header" id="header">
    <!--header-start-->
    <div class="container">
      <figure class="logo animated fadeInDown delay-07s">
        <a href="#"><img src="{{ URL::to("img/flyboy_home_logo.png")}}" alt=""></a>
      </figure>
      <h1 class="animated fadeInDown delay-07s">Welcome To Flyboy Incorporated. </h1>
      <ul class="we-create animated fadeInUp delay-1s">
        <li>Something awesome about flyboy needs to be here </li>
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
                <div class="col-md-12">
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                  <br>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                  <br>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                  <br>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                  <br>
                  <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                </div>
              </div>
              <a href="{{ URL::to('bio') }}"><button class="btn btn-primary">Continure reading</button></a>
          </div>

          <div class="col-md-5 col-sm-7">
            <div class="thumbnail">
              <img src="img/bio.jpg" class="new-album-art" alt="The New Album Art" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--FEATURED GALLERY IMAGES-->
    <section id="gallery-images">
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
            <a href="gallery.html" class="btn btn-primary btn-md">View More Images</a>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--ALBUM RELEASE-->
    <section id="album-release">
      <div class="container">
        <div class="row">
          <div class="section-title">New <span class="title-other-words">Album</span></div>
          <center><div class="divider-white"></div></center>
        </div>

        <div class="row">
          <div class="col-md-5">
            <img src="img/album-art.jpg" class="new-album-art" alt="The New Album Art" />
          </div>
          <div class="col-md-7">
              <div class="row">
                <div class="col-md-12">
                  <div class="album-title">
                    <h3>TITLE OF ALBUM GOES HERE</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="album-release-date"><i class="fa fa-calendar"></i>Friday 22nd, December, 2017.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="about-album">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                  <br>
                  <p class="about-album">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                </div>
              </div>
              <div class="row get-album">
                <div class="col-xs-3"><p style="font-family:'Segoe UI';">Album is available on</p></div>
                <div class="col-xs-3"><i class="fa fa-soundcloud"></i></div>
                <div class="col-xs-3"><i class="fa fa-spotify"></i></div>
                <div class="col-xs-3"><i class="fa fa-apple"></i></div>
              </div>
          </div>
          <a href="#"><button class="btn btn-primary">More music</button></a>
        </div>
      </div>
    </section>




    <!--VIDEO-->
    <section id="video">
      <div id="grey">
        <div class="container">
        <div class="row">
          <div class="section-title">Latest <span class="title-other-words">Music Video</span></div>
          <center><div class="divider-grey"></div></center>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="video-player">
            </div>
            <p class="pull-left">Title of Video</p>
            {{--<a href="#" class="like pull-right"><i class="fa fa-thumbs-o-up"></i></a>--}}
            <span class="clearfix"></span><hr>
            <a href="#"><button class="btn btn-primary">See more videos</button></a>
          </div>
        </di>
      </div>
      </div>
    </section>

    <!--NEWS SECTION-->
    <section id="news">
      <div id="white">
        <div class="container">
        <div class="row">
          <div class="section-title">Latest <span class="title-other-words">News</span></div>
          <center><div class="divider-grey"></div></center>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-1.jpg" />
              <div class="news">
                <div class="news-headline">NEWS HEADLINE</div>
                <div class="news-date"><i class="fa fa-calendar"></i>Fri. 10th, December, 2010.</div>
                <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-4.jpg" />
              <div class="news">
                <div class="news-headline">NEWS HEADLINE</div>
                <div class="news-date"><i class="fa fa-calendar"></i>Fri. 10th, December, 2010.</div>
                <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="image">
              <img class="img-responsive" src="img/image-7.jpg" />
              <div class="news">
                <div class="news-headline">NEWS HEADLINE</div>
                <div class="news-date"><i class="fa fa-calendar"></i>Fri. 10th, December, 2010.</div>
                <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--TOURS AND EVENTS -->
    <section id="events">
      <div id="grey">
        <div class="container">
        <div class="row">
          <div class="section-title">Upcoming <span class="title-other-words">Tours/Events</span></div>
          <center><div class="divider-grey"></div></center>
        </div>
        <div class="row">
          <div class="col-md-4"><p>2nd January, 2018 - 20th January, 2018.</p></div>
          <div class="col-md-4"><p>The New Year Fiesta by Pepsi</p></div>
          <div class="col-md-4"><p>Muson Centre, Lagos.</p></div>
        </div><hr>
        <div class="row">
          <div class="col-md-4"><p>2nd March, 2018 - 20th March, 2018.</p></div>
          <div class="col-md-4"><p>The Fly World Tour</p></div>
          <div class="col-md-4"><p>Nigeria, Ghana, UK, Canada</p></div>
        </div><hr>
        <div class="row">
          <div class="col-md-4"><p>2nd January, 2018 - 20th January, 2018.</p></div>
          <div class="col-md-4"><p>The Fly World Tour</p></div>
          <div class="col-md-4"><p>Nigeria, Ghana, UK, Canada</p></div>
        </div><hr>
        <div class="row">
          <div class="col-md-4"><p>2nd January, 2018 - 20th January, 2018.</p></div>
          <div class="col-md-4"><p>The Fly World Tour</p></div>
          <div class="col-md-4"><p>Nigeria, Ghana, UK, Canada</p></div>
        </div><hr>

      </div>
      </div>
    </section>


    <!--CONTACT US-->
    <section id="contact">
      <div id="grey">
        <div class="container">
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
            <p>For bookings and enquiries</p>
            <p class="enquiry"><i class="fa fa-envelope"></i>bookings@flyboyinc.net</p>
            <p class="enquiry"><i class="fa fa-phone"></i>+234 906 0001 078</p>
            <p class="enquiry"><i class="fa fa-map-marker"></i>Address goes here</p>
            <p style="margin-top: 15px;">Follow us on Facebook, Instagram and Twitter.</p>
            <p class="social-media">
              <a href="https://web.facebook.com/iamkissdaniel"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/iamkissdaniel"><i class="fa fa-instagram"></i></a>
              <a href="https://www.twitter.com/iamkissdaniel"><i class="fa fa-twitter"></i></a>
            </p>
          </div>
        </div>
      </div>
      </div>
    </section>

    <footer class="footer">
    <div class="container">
      <div class="footer-logo"><a href="#"><img src="{{ URL::to('img/flyboy_footer.png') }}" alt=""></a></div>
      <span class="copyright">&copy; 2017 Flyboy Incorporated. All Rights Reserved</span>
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
      </script>


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
