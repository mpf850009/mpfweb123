@extends('innovative.main')
@section('content')
<!-- banner -->
	<div id="exampleSlider">
		<div>
			<h3>
				<span></span>
			</h3>
		</div>
		<div>
			<h3>
				<span></span>
			</h3>
		</div>
		<div>
			<h3>
				<span></span>
			</h3>
		</div>
		<div>
			<h3>
				<span></span>
			</h3>
		</div>
	</div>


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

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->


	<!-- //bootstrap-pop-up -->
	<div class="w3-about-us">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Welcome</h3>
			</div>
			<div class="w3-about-text">
				<h3 align="center">歡迎光臨 Innovative</h3><br>
				<p>
					　　本網站介紹的商品，是我們精心代理國內外最優質的品牌。Innovative網站是個結合嬰幼兒產品、戶外活動的生活網站，如您對相關產品有任何的問題，歡迎隨時和我們連繫。
				</p>				
			</div>

			<!-- about brief -->
			<div class="events">
				<div class="col-md-6 w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{asset('images/innovative/wel2.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>30 March 2018</p>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5>
							<a href="#" data-toggle="modal" data-target="#myModal">Nikimotion</a>
						</h5>
						<p>
							The task for the product designers was to develop a special product design created out of the unique folding mechanism. The first prototype was created in 2015 and was ultimately the birthdays of the nikimotion models Blade and Autofold.<br>
							運用專利特有的機構摺疊設計技術，Nikimotion的Blade和Autofold，兩個型號產品於2015年誕生了！
						</p>
					</div>
				</div>
				<div class="col-md-6 w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{asset('images/innovative/wel1.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>30 March 2018</p>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5>
							<a href="#" data-toggle="modal" data-target="#myModal">Veer</a>
						</h5>
						<p>
							"PUSH, PULL, PUSH-ALONG ，STOW & GO Push it like a stroller, pull it like a wagon or push it along like modern luggage. Proper design makes it suprisingly easy to maneuver.Fast and compact folding for easy transport. Sits upright on end for compact storage."<br>
							推拖拉，收放自如：推起來像推車，拉或拖的時候輕如行李．輕巧輕盈的設計讓你容易操控摺疊收納與攜帶！
						</p>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="col-md-6 w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{asset('images/innovative/wel3.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>30 March 2018</p>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5>
							<a href="#" data-toggle="modal" data-target="#myModal">MPF Drive</a>
						</h5>
						<p>
							Mid-Motor System for E-Bike to meet all knids of riding challenges , Match Performance with your Feeling and More Powerful Feeling<br>
							MPF Drive 中置馬達電機系統，提供匹配你感覺需要的性能表現，更有力、滿足各種騎乘的挑戰！
						</p>
					</div>
				</div>
				<div class="col-md-6 w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="{{asset('images/innovative/wel4.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>30 March 2018</p>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5>
							<a href="#" data-toggle="modal" data-target="#myModal">E-Bike</a>
						</h5>
						<p>
							E-Bikes brands and models powered by MPF Drive Mid-Motor System.<br><br>
							採用MPF Drive 中置馬達電機系統的各式品牌電動輔助自行車！<br>　　
						</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //about brief -->
		</div>
	</div>
	<!-- services -->
	<div class="w3-agile-services">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Services</h3>
			</div>
			<div class="agileits-services">
				<div class="services-right-grids">
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-tachometer" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Experience our Product</h5>
							<p>
								可點選「E-Bike」至全省租車點現場租借體驗...
							</p>
							<h4>
								<a href="#" data-toggle="modal" data-target="#myModal11">more</a>
							</h4>
						</div>
					</div>
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-wrench" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Technical Support</h5>
							<p>
								技術支援...<br>　
							</p>
							<h4>
								<a href="#" data-toggle="modal" data-target="#myModal12">more</a>
							</h4>
						</div>
					</div>
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-shield" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Product Warranty</h5>
							<p>
								各式產品保固...<br>　
							</p>
							<h4>
								<a href="#" data-toggle="modal" data-target="#myModal13">more</a>
							</h4>
						</div>
					</div>
					
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Shopping Cart</h5>
							<p>
								PC Home、愛單車生活館...<br>　
							</p>
							<h4>
								<a href="#" data-toggle="modal" data-target="#myModal14">more</a>
							</h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
	</div>
	
	@include('innovative.service')
	
	<!-- services -->
	
	

	<!-- news -->
	<div id="news" class="gallery">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Latest News</h3>
			</div>
			<div class="gallery-w3lsrow">
				<div class="col-sm-6 col-xs-12 gallery-grids w3-adv-left1" style="padding:1cm 1cm 0cm 1cm;">
					<div class="w3-adv-lef1-text">
						<h3>Eurobike Friedrichshafen</h3>
						<p>July, 8-10, 2018, Germany</p>
					</div>
					<div class="w3-adv-lef1-text2">
						<p>
							<span>"</span>The Eurobike is a true beacon in the landscape of the future that bicycle-based mobility represents.
							<span>"</span>
						</p>
						<small style="float:right;">Winfried Kretschman, Governor of the State of Baden-Württemberg</small>
						
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 gallery-grids">
					<div class="w3ls-hover">
						<a target="_blank" href="http://www.eurobike-show.com/" data-lightbox="example-set" data-title="">
							<img src="{{asset('images/innovative/news1.gif')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
							<div class="view-caption">
								<h5>Eurobike Friedrichshafen</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>

				<div class="col-sm-6 col-xs-12 gallery-grids">
					<div class="w3ls-hover">
						<a target="_blank" href="http://www.cbmexpo.com/" data-lightbox="example-set" data-title="">
							<img src="{{asset('images/innovative/news2.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
							<div class="view-caption">
								<h5>第18屆CBME中國孕嬰童展、童裝展</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 gallery-grids w3-adv-right2" style="padding:1cm 1cm 0cm 1cm;">
					<div class="w3-adv-right2-text">
						<h3>第18屆CBME中國孕嬰童展、童裝展</h3>
						<p>2018.7.25-27, 國家會展中心(上海)</p>
					</div>
					<div class="w3-adv-right2-text-para">
						<p>
							✔ 266,548平米展示空間，匯聚全品類孕嬰童產品<br>
							✔ 2,900+家展商在2018 CBME中國現場展示4,300+個品牌<br>
							✔ 全球知名品牌齊聚CBME中國<br>
							✔ 與90,000+位優質買家建立業務聯繫，拓展商機 <br>
							✔ 整合式營銷，提升品牌曝光度和影響力
						</p>
						<small style="float:right;">We will be there soon!</small>
					</div>
				</div>
				<div class="clearfix"> </div>

				<div class="col-sm-6 col-xs-12 gallery-grids w3-adv-left1" style="padding:1cm 1cm 0cm 1cm;">
					<div class="w3-adv-lef1-text">
						<h3>2018 Taichung Bike Week</h3>
						<p>September 26-28, 2018, Taichung</p>
					</div>
					<div class="w3-adv-lef1-text2">
						<p>
							<span>"</span>By the bike industry for the bike industry.<span>"</span>
						</p>
						<small style="float:right;">We will be there soon!</small>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 gallery-grids">
					<div class="w3ls-hover">
						<a target="_blank" href="http://www.taichungbikeweek.com/" data-lightbox="example-set" data-title="">
							<img src="{{asset('images/innovative/news3.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
							<div class="view-caption">
								<h5>2018 Taichung Bike Week</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="col-sm-6 col-xs-12 gallery-grids">
					<div class="w3ls-hover">
						<a target="_blank" href="https://goo.gl/PA79Aj" data-lightbox="example-set" data-title="">
							<img src="{{asset('images/innovative/news4.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
							<div class="view-caption">
								<h5>Taipei Cycle 2018 Fact Sheet</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 gallery-grids w3-adv-right2" style="padding:1cm 1cm 0cm 1cm;">
					<div class="w3-adv-right2-text">
						<h3>Taipei Cycle 2018 Fact Sheet</h3>
						<p>Oct 30-Nov 3, 2018, Taipei</p>
					</div>
					<div class="w3-adv-right2-text-para">
						<h4>Events</h4><br>
						<p>
							✔ 2018 Taipei Cycle Grand Opening Ceremony <br>
							✔ DEMO DAY <br>
							✔ TAIPEI CYCLE d&i Awards <br>
							✔ International Forums <br>
							✔ International Bicycle Design Competition(IBDC) <br>
							✔ LEV Test-drive <br>
						</p>
						<h4>Co-organizers</h4><br>
						<p>Taiwan Bicycle Association (TBA)</p>
						<h4>Organizer</h4><br>
						<p>Taiwan External Trade Development Council (TAITRA)</p>
						<small style="float:right;">We will be there soon!</small>
					</div>
				</div>
				
				<div class="clearfix"> </div>

				<div class="container">
					<br>
					<p style="float:right">
						資料來源: 「<a href="http://www.eurobike-show.com/">EUROBIKE</a>」 
						「<a href="http://www.cbmexpo.com/">中國孕嬰童展、童裝展</a>」 
						「<a href="http://www.taichungbikeweek.com/">Taichung Bike Week</a>」 
						「<a href="https://goo.gl/4ZVd6Z">2018台北國際自行車展</a>」 
					</p>
				</div>

			</div>
		</div>
	</div>
	<!-- news -->

	<!-- contact -->
	<div class="contact jarallax">
		<div class="container">
			<div class="w3-headings-all">
				<h3>Contact Us</h3>
			</div>
			<div class="contact-grids"  align="center">
				<div class="address">
					<h4>Get in touch with us</h4>
					<p style="font-size:25px;" class="cnt-p">Innovative Taiwan Branch</p>
					<div class="agileits-social-address">
						<p>No.296, Zhong Shan Road, Yong Kang District, Tainan, Taiwan</p>
						<p>Telephone : 06-2028028</p>
						<p>FAX : 06-2028029</p>
						<p>Email :
							<a href="mailto:sales@innovative.com">sales@innovative.com</a>
						</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- /contact map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.75413360442!2d120.2535333143446!3d23.03279802172703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e70ca0d6e8473%3A0x24f029b720db9c17!2zNzEw5Y-w5Y2X5biC5rC45bq35Y2A5Lit5bGx6LevMjk26Jmf!5e0!3m2!1szh-TW!2stw!4v1521788762288"></iframe>
	</div>
	<!-- //contact map -->
@endsection