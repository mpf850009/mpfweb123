<!-- banner -->
	<div class="header">

		<div class="w3layouts_header_right">
			<div class="detail-w3l" >
				<ul>
					<!--
					<li>
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> 06-2028028
					</li>
					-->
				</ul>
			</div>
		</div>
		<div class="w3layouts_header_left">
			<ul>
				<li>
					<a href="#" data-toggle="modal" data-target="#myModal2">
						<i class="fa fa-user" aria-hidden="true"></i>Login</a>
				</li>

			</ul>

		</div>
		<div class="agileits-social top_content">
			<ul>
				
				<li>
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-youtube-square"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-instagram"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-comments"></i>
					</a>
				</li>
				<!--
				<li>
					<a href="#">
						<i class="fa fa-rss"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-vk"></i>
					</a>
				</li>
			-->
			
				
			</ul>
		</div>

		<div class="clearfix"> </div>
	</div>

	<div class="banner">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1>
					<a class="navbar-brand" href="{{route('innovative.index')}}">
						<!--
						<span>
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>Innovative
						-->
						<img src="{{asset('images/innovative/innovationlogo.gif')}}" alt="" width="200">
					</a>
				</h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li @if($active=='index')class="active" @endif>
							<a href="{{route('innovative.index')}}">
								<span data-hover="Home">Home</span>
							</a>
						</li>
						<li @if($active=='about us')class="active" @endif>
							<a href="{{route('innovative.about')}}">
								<span data-hover="About US">About US</span>
							</a>
						</li>
						<li @if($active=='mpf drive')class="active" @endif>
							<a href="{{route('innovative.mpfdrive')}}">
								<span data-hover="MPF Drive">MPF Drive</span>
							</a>
						</li>
						<li @if($active=='nikimotion')class="active" @endif>
							<a href="{{route('innovative.nikimotion')}}">
								<span data-hover="Nikimotion">Nikimotion</span>
							</a>
						</li>
						<li @if($active=='veer')class="active" @endif>
							<a href="{{route('innovative.veer')}}">
								<span data-hover="Veer">Veer</span>
							</a>
						</li>
						<li @if($active=='e-bike'||$active=='rentplace'||$active=='brand')class="active" @endif class="dropdown" >
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span data-hover="E-Bike">E-Bike</span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="{{route('innovative.ebike')}}">E-Bike</a>
								</li>
								<li>
									<a href="{{route('innovative.rentplace')}}">E-Bike全省租車點</a>
								</li>
								<li>
									<a href="{{route('innovative.brand')}}">E-Bike品牌夥伴</a>
								</li>
							</ul>
						</li>
						<li @if($active=='store')class="active" @endif>
                            <a href="{{route('innovative.flagship')}}">
                                <span data-hover="Store">Store</span>
                            </a>
						</li>
						<li class="dropdown" >
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span data-hover="Shopping Cart">Shopping Cart</span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a target="_blank" href="http://www.pcstore.com.tw/innovative">PC Home</a>
								</li>
								<li>
									<a target="_blank" href="https://goo.gl/Xv9dqQ">愛單車生活館</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</nav>
	</div>
	<link rel="stylesheet" href="{{asset('css/innovative/lightbox.css')}}">

	<!-- //banner -->
	
	@if($active!="index")
		<div class="banner-multi" style="{{$background}}">
		</div>
		<div class="about-breadcrumb">
			<div class="container">
				<ul>
					<li>
						<a href="{{route('innovative.index')}}">Home</a>
						<i>|</i>
					</li>
					<li>
						<p>{{$active}}</p> 
					</li>
				</ul>
			</div>
		</div>
	@endif
	
	