<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flyboy Inc :: Events</title>

    <link href="{{ URL::to('css/event.css') }}" rel="stylesheet" />
    <link href='{{ URL::to('css/bootstrap.css') }}' rel="stylesheet" />
    <link href="{{ URL::to('css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('css/style.css')}}" rel="stylesheet" />
</head>

<body>
    <header id="event-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="concert-title">NEW IMMEDIATE EVENT</h1>
            <p class="concert-info">Lines of text like an overview of what the concert is all about goes here.<br/>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </div>
    </header>

    <section class="concert-details">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <p><i class="fa fa-map-marker"></i>The Expo Hall, Eko Hotel and Suites, Victoria Island, Lagos.</p>
          </div>
          <div class="col-md-3">
            <p><i class="fa fa-calendar"></i>Friday 17th, December, 2017.</p>
          </div>
          <div class="col-md-2">
            <p><i class="fa fa-clock-o"></i>7:00pm</p>
          </div>
          <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-lg">GET TICKET</a>
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
        <li class="small-logo"><a href="{{ route('user.index') }}"><img src="{{ URL::to('img/flyboy70.png') }}" alt="logo"></a></li>
        <li><a href="{{ route('user.news') }}">News</a></li>
        <li><a href="{{ route('user.events') }}">Events</a></li>
        <li><a href="{{ route('user.contact') }}">Contact</a></li>
        <li><a href=""></a></li>
      </ul>
      <a class="res-nav_click" href="#"><i class="fa-bars" style="color:#f2c053;"></i></a>
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
                  <h3>{{$event->title}}</h3>
                  <p> {{ $event->about }}</p>
                  <div class="row">
                    <div class="col-md-7">
                      <p><i class="fa fa-map-marker"></i>{{$event->location}}</p>
                    </div>
                    <div class="col-md-5">
                      <p><i class="fa fa-calendar"></i>{{$event->date}}</p>
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
              <ul class="pagination text-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="events.html">1</a></li>
                <li class="page-item"><a class="page-link" href="events2.html">2</a></li>
                <li class="page-item"><a class="page-link" href="events3.html">3</a></li>
                <li class="page-item"><a class="page-link" href="events2.html">Next</a></li>
              </ul>
            </div>
          </div>
        @endif

        {{$events->links()}}
      </div>
    </section>



  <footer class="footer">
    <div class="container">
      <div class="footer-logo"><a href="#"><img src="{{ 'img/flyboy_footer.png' }}" alt=""></a></div>
      <span class="copyright">&copy; 2017 Flyboy Incorporated. All Rights Reserved</span>
      <div class="credits">

        <a href="https://bootstrapmade.com/bootstrap-agency-templates/" style="color:#f2c053">Flyboy Incorporated</a> by <a href="https://bootstrapmade.com/">GeeksLab</a>
      </div>
    </div>
  </footer>


  <script type="text/javascript" src="{{ URL::to("js/jquery.1.8.3.min.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/bootstrap.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery-scrolltofixed.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.easing.1.3.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.isotope.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/wow.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/classie.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/baguetteBox.min.js")}}"></script>
  <script type="text/javascript" src="{{ URL::to("js/jquery.backstretch.js")}}"></script>


  <script type="text/javascript">
    $(document).ready(function(e) {
      $('#test').scrollToFixed();
      $('.res-nav_click').click(function() {
        $('.main-nav').slideToggle();
        return false

      });

    });
  </script>

@yield('baseScript')



  <script type="text/javascript">
    $(window).load(function() {

      $('.main-nav li a, .servicelink').bind('click', function(event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
          scrollTop: $($anchor.attr('href')).offset().top - 102
        }, 1500, 'easeInOutExpo');

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