@extends('includes.header')


@section('title')
	<title>Flyboy Inc :: News </title>
@endsection

@section('pagelink')

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


	<section id="newsContainer">

		   <h2>News </h2>
		<div class="container">

			<div class="row" >
				<article class="news-element">
						<div class="col-md-5">
							<img class="img-responsive" width="390" height="237" src="{{ URL::to('img/bio2.jpg') }}" alt="">
						</div>

						<div class="col-md-7">
							    <header>
									<h3 class="date">October 31 2017</h3>
									<h1 class="news-title" style="font-family: Lato">
										<a href="">Heartbreak on a full Moon and some sunny stuff.</a>
									</h1>
							  	</header>

							  		<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
							  		</blockquote>

							<footer class="news-link">
								<a href="" class="btn btn-default">READ MORE </a>
							</footer>
						</div>
				</article>
				<hr>
			</div>

			<footer style='text-align: center;margin-top: 30px;'>
				<p class="pagination"><a href="">NEXT</a></p>
			</footer>
		</div>
	</section>
@endsection

