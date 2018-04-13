<!DOCTYPE HTML>
<html>

<head>
	<title>MPF租車系統</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="MPF,MPF DRIVE,DRIVE,穩正企業,MPF 租車系統,MPF DRIVE 租車系統,腳踏車出租,腳踏車,電動腳踏車,北門井仔腳腳踏車出租,electric bicycle,golf,bike,golf cart,electric golf cart ,umbrella,sports,golf towel,golf tools,golf ball cabinet,taiwan">
	<meta name="description" content="MPFDrive 穩正企業提供多項電動助動腳踏車體驗、租賃及販售等等項目，點我查看更多！">
	<meta http-equiv="Content-Type" content="text/html" ; charset="UTF-8">
	<meta name="robots" content="all">
	<meta name="distribution" content="GLOBAL">
	<meta name="copyright" content="穩正企業股份有限公司">

	
	<!--[if lte IE 8]><script src="{{asset('js/bikerental/ie/html5shiv.js')}}"></script><![endif]-->
	<link rel="stylesheet" href="{{asset('css/bikerental/main.css')}}" />

	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
	<!--[if lte IE 9]><link rel="stylesheet" href="{{asset('css/bikerental/ie9.css')}}" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="{{asset('css/bikerental/ie8.css')}}" /><![endif]-->

</head>

<body @if($active=='index')class="landing"@endif >
	<div id="page-wrapper">

		<!-- Header -->
		@include('bikerental.nav')

		<!-- Banner -->
		@yield('content')


		<!-- Footer -->
		@include('bikerental.footer')
	</div>

	<!-- Scripts -->
	<script src="{{asset('js/bikerental/jquery.min.js')}}"></script>
	<script src="{{asset('js/bikerental/jquery.scrolly.min.js')}}"></script>
	<script src="{{asset('js/bikerental/jquery.dropotron.min.js')}}"></script>
	<script src="{{asset('js/bikerental/jquery.scrollex.min.js')}}"></script>
	<script src="{{asset('js/bikerental/skel.min.js')}}"></script>
	<script src="{{asset('js/bikerental/util.js')}}"></script>
	<!--[if lte IE 8]><script src="{{asset('js/bikerental/ie/respond.min.js')}}"></script><![endif]-->
	<script src="{{asset('js/bikerental/main.js')}}"></script>

	<!-- 回到頂端按鈕 start -->
	<script>
		//<![CDATA[
		(function () {
			$("body").append("<img id='goTopButton' style='display: none; z-index: 3; cursor: pointer;' title='回到頂端'/>");
			var img = "{{asset('images/bikerental/top.png')}}",
				locatioin = 0.85, // 按鈕出現在螢幕的高度
				right = 10, // 距離右邊 px 值
				opacity = 0.4, // 透明度
				speed = 2000, // 捲動速度
				$button = $("#goTopButton"),
				$body = $(document),
				$win = $(window);
			$button.attr("src", img);
			$button.on({
				mouseover: function () { $button.css("opacity", 1); },
				mouseout: function () { $button.css("opacity", opacity); },
				click: function () { $("html, body").animate({ scrollTop: 0 }, speed); }
			});
			window.goTopMove = function () {
				var scrollH = $body.scrollTop(),
					winH = $win.height(),
					css = { "top": winH * locatioin + "px", "position": "fixed", "right": right, "opacity": opacity };
				if (scrollH > 20) {
					$button.css(css);
					$button.fadeIn("slow");
				} else {
					$button.fadeOut("slow");
				}
			};
			$win.on({
				scroll: function () { goTopMove(); },
				resize: function () { goTopMove(); }
			});
		})();
				//]]>
	</script>
	<!-- 回到頂端按鈕 -->

</body>

</html>