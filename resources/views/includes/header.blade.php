<!doctype html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<meta property="og:locale" content="en_US" />
	<meta name="description" content="Flyboy Inc. Kiss Daniel">
	<meta property="og:title" content="Flyboy Inc. Kiss Daniel" />
	<meta property="og:description" content="Flyboy Inc. Kiss Daniel" />
	<meta property="og:url" content="{{ URL::current() }}" />
	<meta property="og:site_name" content="Flyboy Inc." />

     @yield('title')

	<link rel="icon" href="{{ URL::to('img/flyboy_favicon.png') }}" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link href="{{URL::to("css/style.css")}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/font-awesome.css")}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/responsive.css")}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/animate.css")}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::to("css/baguetteBox.min.css")}}"  rel="stylesheet" type="text/css">
	@yield('pagelink')

	<script type="text/javascript" src="{{ URL::to("js/jquery-3.2.1.min.js")}}"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
		$(window).on('load',function() {

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
		$(window).on('load',function() {


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