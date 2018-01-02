@extends('includes.header')

@section('title')
    <title>Flyboy Inc :: Contact</title>
@endsection

@section('pagelink')
    <link type="text/css" rel="stylesheet" href="{{URL::to('css/contact.css')}}">
@endsection



@section('afterbodyContent')
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

    <section id="contactSection">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 id="contactHeader">SAY HELLO</h2>
                    <hr>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-default btn-lg" type="submit" name="submit" id="submit" value="Send">
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h2 id="bookingHeader">CONTACT</h2>
                    <hr>
                    <h3>Booking and enquiries</h3>
                    <div class="divider"></div>
                    <div id="details">
                        <p class="booking"><span class="fa fa-envelope-o"></span>  bookings@flyboyinc.net</p>
                        <p class="booking"><span class="fa fa-phone"></span> +234 906 0001 078</p>
                    </div>

                    <h3>Follow us.</h3>
                    <div class="divider"></div>
                    <div id="social-media">
                        <a href="http://www.facebook.com/iamkissdaniel"><span class="fa fa-facebook fa-3x"></span></a>
                        <a href="http://www.twitter.com/iamkissdaniel"><span class="fa fa-twitter fa-3x"></span></a>
                        <a href="http://www.instagram.com/iamkissdaniel"><span class="fa fa-instagram fa-3x"></span></a>
                        <a href="http://www.youtube.com/KissDanielVEVO"><span class="fa fa-youtube fa-3x"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection