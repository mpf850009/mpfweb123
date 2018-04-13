@extends('innovative.main')
@section('content')
<!--bars -->
	<script type="text/javascript">
		$(function () {
			$("#bars li .bar").each(function (key, bar) {
				var percentage = $(this).data('percentage');

				$(this).animate({
					'height': percentage + '%'
				}, 1000);
			})
		})
	</script>
<!-- bars -->

<!-- ResponsiveTabs -->
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


<!-- //banner -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign In</h3>
						<div class="login-form">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="E-mail" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<div class="tp">
									<input type="submit" value="Sign In">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
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
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
						<p>
							<a href="#" data-toggle="modal" data-target="#myModal3"> Dont have an account?</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->

	<!-- //bootstrap-pop-up -->
	<!-- about page -->
	<div class="inner_main_agile_section">
		<div class="container">
			<div class="w3-headings-all">
				<h3>About Us</h3>
			</div>
			<div class="agile_inner_grids">

				<div class="col-md-6 w3_agileits_about_grid_left">
					<p>
						Found in 2018 Innovative Ind. Co., Ltd is a professional branding and channels expert , focuing on the following products sales and marketing distribution.<br>
						<strong>Multi-function sports stroller : </strong>NIKIMOTION<br>
						<strong>One size for all CRUISER : </strong>VEER <br>
						<strong>MPF Drive E-Bike : </strong>IKIN <br>
					</p><br>
					<p>
						創星有限公司創立於2018，為專業品牌及通路經營專家，目前代理品牌產品包含<br>
						<strong>專業嬰兒多功能推車/拖車 : </strong>NIKIMOTION & VEER<br>
						<strong>電動輔助自行車產品 : </strong>IKIN、MPF DRIVE、BALLISTIC<br>
					</p><br>
					<!--
					<ul>
						<li>
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>Speed deliver</li>
						<li>
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>Interational clients</li>
						<li>
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>Fast Response</li>
						<li>
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>Effective Solutions</li>
					</ul>-->
				</div>
				<div class="col-md-6 w3_agileits_about_grid_right">
					<div class="w3ls-hover">
						<a href="{{asset('images/innovative/store2.jpg')}}" data-lightbox="example-set" data-title="">
							<img src="{{asset('images/innovative/store2.jpg')}}" class="img-responsive zoom-img" alt="" />
							<div class="view-caption">
								<h5>樂享學</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>

					<!--
					<div id="chart">
						<ul id="numbers">
							<li>
								<span>100%</span>
							</li>
							<li>
								<span>90%</span>
							</li>
							<li>
								<span>80%</span>
							</li>
							<li>
								<span>70%</span>
							</li>
							<li>
								<span>60%</span>
							</li>
							<li>
								<span>50%</span>
							</li>
							<li>
								<span>40%</span>
							</li>
							<li>
								<span>30%</span>
							</li>
							<li>
								<span>20%</span>
							</li>
							<li>
								<span>10%</span>
							</li>
							<li>
								<span>0%</span>
							</li>
						</ul>
						<ul id="bars">
							<li>
								<div data-percentage="56" class="bar"></div>
								<span>2012</span>
							</li>
							<li>
								<div data-percentage="33" class="bar"></div>
								<span>2013</span>
							</li>
							<li>
								<div data-percentage="54" class="bar"></div>
								<span>2014</span>
							</li>
							<li>
								<div data-percentage="94" class="bar"></div>
								<span>2015</span>
							</li>
							<li>
								<div data-percentage="44" class="bar"></div>
								<span>2016</span>
							</li>
							<li>
								<div data-percentage="23" class="bar"></div>
								<span>2017</span>
							</li>
						</ul>
					</div>-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about page -->


	<!-- team -->
	<!--
	<div class="team1" id="team1">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Our Team</h3>
			</div>
			<div class="agileinfo-team-grids">
				<div class="col-md-3 wthree-team-grid">
					<img src="images/innovative/w1.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Mary Jane</h4>
						<p>Vestibulum</p>
						<div class="team-social-grids">
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
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/innovative/w2.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Peter Parke</h4>
						<p>Vestibulum</p>
						<div class="team-social-grids">
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
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/innovative/w3.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Jennifer Watson</h4>
						<p>Vestibulum</p>
						<div class="team-social-grids">
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
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 wthree-team-grid">
					<img src="images/innovative/w4.jpg" alt="">
					<div class="wthree-team-grid-info">
						<h4>Steven Wilson</h4>
						<p>Vestibulum</p>
						<div class="team-social-grids">
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
										<i class="fa fa-rss"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>-->
	<!-- //team -->

	<!-- testimonial -->
	<!--
	<div class="testimonial testimonial_about agileits-w3layouts" id="testimonial">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Testimonials</h3>
			</div>
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Donec libero dui, scelerisque ac augue id, tristique ullamcorper elit. Nam ultrices, lacusvitae adipiscing aliquet,
									metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis. lorem ipsum dolor sit amet</p>
								<h5>合作廠商</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Scelerisque ac augue id Donec libero dui, tristique ullamcorper elit. Nam ultrices, lacusvitae adipiscing aliquet,
									metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis. lorem ipsum dolor sit amet</p>
								<h5>分析師</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec
									libero dui, scelerisque ac augue id, ullamcorper elit,diam ac nibhconvallis. lorem ipsum dolor sit amet</p>
								<h5>物流人員</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first">
								<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec
									libero dui, scelerisque ac augue id, ullamcorper elit,diam ac nibhconvallis. lorem ipsum dolor sit amet</p>
								<h5>經理</h5>
							</div>
						</div>
					</div>
					<ul class="resp-tabs-list">
						<li class="resp-tab-item">
							<img src="images/innovative/t11.jpg" alt="" />
						</li>
						<li class="resp-tab-item">
							<img src="images/innovative/t33.jpg" alt="" />
						</li>
						<li class="resp-tab-item">
							<img src="images/innovative/t44.jpg" alt="" />
						</li>
						<li class="resp-tab-item">
							<img src="images/innovative/t55.jpg" alt="" />
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- //testimonial -->

	<!-- /contact map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.75413360442!2d120.2535333143446!3d23.03279802172703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e70ca0d6e8473%3A0x24f029b720db9c17!2zNzEw5Y-w5Y2X5biC5rC45bq35Y2A5Lit5bGx6LevMjk26Jmf!5e0!3m2!1szh-TW!2stw!4v1521788762288"></iframe>
	</div>
	<!-- //contact map -->

	<script src="{{asset('js/innovative/lightbox-plus-jquery.min.js')}}"></script>
@endsection