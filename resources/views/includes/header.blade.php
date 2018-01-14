<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

     @yield('title')

	<link rel="icon" href="{{ URL::to('img/flyboy_favicon.png') }}" type="image/png">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="{{URL::to("css/bootstrap.css")}}" rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/style.css")}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/font-awesome.css")}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/responsive.css")}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/animate.css")}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/baguetteBox.min.css")}}"  rel="stylesheet" type="text/css">
	@yield('pagelink')

	<script type="text/javascript" src="{{ URL::to("js/jquery-3.2.1.min.js")}}"></script>
	<script type="text/javascript" src="{{ URL::to("js/bootstrap.js")}}"></script>
	<script type="text/javascript" src="{{ URL::to("js/jquery-scrolltofixed.js")}}"></script>
	<script type="text/javascript" src="{{ URL::to("js/jquery.easing.1.3.js")}}"></script>
	<script type="text/javascript" src="{{ URL::to("js/jquery.isotope.js")}}"></script>
	<script type="text/javascript" src="{{ URL::to("js/wow.js")}}"></script>
	<script type="text/javascript" src="{{ URL::to("js/classie.js")}}"></script>
	<script type="text/javascript" src="{{ URL::to("js/baguetteBox.min.js")}}"></script>
	<script type="text/javascript" src="{{ URL::to("js/jquery.backstretch.js")}}"></script>
	@yield('pagescript')



</head>

<body>

@yield('afterbodyContent')

@yield('pageContent')


	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="{{ 'img/flyboy_footer.png' }}" alt=""></a></div>
			<span class="copyright">&copy; 2018 Flyboy Inc. All Rights Reserved</span>
			<div class="credits">

				<a href="" style="color:#f2c053">Flyboy Inc.</a>
			</div>
		</div>
	</footer>



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