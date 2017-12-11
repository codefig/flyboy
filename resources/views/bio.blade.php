@extends('includes.header')


@section('title')
	<title>Flyboy Inc :: Bio </title>
@endsection

@section('pagelink')
	<link rel="stylesheet" href="{{ URL::to('css/bio.css') }}">
@endsection

@section('pageContent')

		<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="">Bio</a></li>
				<li><a href="{{ route('user.music') }}">Music</a></li>
				<li><a href="{{ route('user.photos') }}">Photos</a></li>
				<li><a href="{{ route('user.videos') }}">Videos</a></li>
				<li class="small-logo"><a href="{{ route('user.index') }}"><img src="{{ URL::to('img/flyboy70.png') }}" alt="logo"></a></li>
				<li><a href="{{ route('user.news') }}">News</a></li>
				<li><a href="{{ route('user.events') }}">Events</a></li>
				<li><a href="{{ route('user.contact') }}">Contact</a></li>
				<li><a href="#"></a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->


	<section id="bioContainer">

		<center><img id="bio-img" src="img/sliders/slider-5.jpg" class="img-responsive" alt=""></center>
		<div class="container container-fluid">

				<div class="row">

					  <div class="col-md-6">
					  	<p>
					  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  	</p>
					  </div>

					    <div class="col-md-6">
					  	<p>
					  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  	</p>
					  </div>
				</div>
		</div>

	</section>
@endsection





