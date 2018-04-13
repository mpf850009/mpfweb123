<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Innovative創星</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="創星,創星有限公司,嬰,兒,車,嬰兒,兒車,嬰兒車,拖,拖車,樂,享,學,樂享,享學,樂享學,電,電助,腳踏車,電助腳踏車,腳踏,腳踏車,咖啡,輕食,咖啡輕食,嬰幼兒產品,嬰幼兒,幼兒,愛單車,生活館,單車,愛單車生活館,ebike,bike,e,cafe,baby,products,babu products,taiwan,branch,taiwan branch,innovative,veer,nikimotion,kids,kid,autofold,auto,fold,lite,autofoldlite,fabric,color,fabric color,viewpoint,view,point,viewpoint,easy,folding,easyfolding,ACCESSORIES,accessories,foldable,storage,basket,retractable,canopy,INFANT,CAR,SEAT,ADAPTER,TRAVEL,BAG,CUP,HOLDERS,NAP,SYSTEM,COMFORT,SEAT,DRINK,SNACK,PC HOME,pchome,pc,home" />

	<!--自動回到頂端-->
	<!--
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>-->
	<!--//自動回到頂端-->

	<!-- //custom-theme -->
	<link href="{{asset('/css/innovative/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('/css/innovative/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('/css/innovative/mainStyles.css')}}" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('/css/innovative/dscountdown.css')}}" type="text/css" media="all" />

	<!-- gallery -->
	<link href="{{asset('css/innovative/lsb.css')}}" rel="stylesheet" type="text/css">
	<!-- //gallery -->
	<!-- font-awesome-icons -->
	<link href="{{asset('css/innovative/font-awesome.css')}}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">

	<!-- js -->
	<script type="text/javascript" src="{{asset('js/innovative/jquery-2.1.4.min.js')}}"></script>
	<!-- //js -->

	<!-- start-smooth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
</head>

<body>
	
	@include('innovative.nav')

	@yield('content')
	
	@include('innovative.footer')


	<script src="{{asset('js/innovative/mainScript.js')}}"></script>
	<script src="{{asset('js/innovative/rgbSlide.min.js')}}"></script>


	<!--team-->
	<script type="text/javascript" src="{{asset('js/innovative/jquery.flexisel.js')}}"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				itemsToScroll: 4,
				animationSpeed: 800,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1,
						itemsToScroll: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2,
						itemsToScroll: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3,
						itemsToScroll: 3
					}
				}
			});
		});
	</script>
	
	<!--team-->
	<!-- //here ends scrolling icon -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<script src="{{asset('js/innovative/SmoothScroll.min.js')}}"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('js/innovative/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/innovative/easing.js')}}"></script>

	<!-- start-smoth-scrolling -->
	<!-- for bootstrap working -->
	<script src="{{asset('js/innovative/bootstrap.js')}}"></script>

	<!-- //for bootstrap working -->

	<!-- ResponsiveTabs -->
	<script src="{{asset('js/innovative/easyResponsiveTabs.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs -->

	
</body>

</html>