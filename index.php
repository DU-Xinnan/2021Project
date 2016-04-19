<?php
include_once "header.php"
?>
<div class="header-banner">
	<!-- Top Navigation -->
	<div class="container page-seperator">
		<section class="color bgi">
			<h3>Lorem Ipsum Simply A Dummy Text To Format Fonts And Paragraphs.</h3>
			<p>lorem ipsum simply a dummy text to format fonts and paragraphs,consectetuer adipiscing elit, sed diam </p>
			<button type="button" class="btn btn-warning but1">Read more</button>
		</section>
	</div>
</div>
<section class="slider">
	<div class="container" style="height: 100px;">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="banner-info">
						<h3>Our latest feeds</h3>
					</div>
				</li>
				<li>
					<div class="banner-info">
						<h3>Our latest feeds</h3>
					</div>
				</li>
				<li>
					<div class="banner-info">
						<h3>Our latest feeds</h3>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- FlexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
		});
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- FlexSlider -->
</section>

<div class="our-work" id="our-work">
	<div class="container">
		<h2>our work</h2>
		<p>lorem ipsum simply a dummy text to format fonts and paragraphs</p>
		<div class="gallery-bottom">
			<div class="col-md-4 bottom-gallery">
				<a href="./images/IMG_3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/IMG_3.jpg" />
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span class="txt">Lorem</span>
							<span class="glyphicon glyphicon-arrow-right gal-icn" aria-hidden="true"></span>
						</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 bottom-gallery">
				<a href="images/IMG_1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/IMG_1.jpg" />
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span class="txt">Lorem</span>
							<span class="glyphicon glyphicon-arrow-right gal-icn" aria-hidden="true"></span>
						</h3>
					</div>
				</a>
			</div>
			<div class="col-md-4 bottom-gallery">
				<a href="images/IMG_5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/IMG_5.jpg" />
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span class="txt">Lorem</span>
							<span class="glyphicon glyphicon-arrow-right gal-icn" aria-hidden="true"></span>
						</h3>
					</div>
				</a>
			</div>

			<div class="clearfix"></div>
			<script src="js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
				$(function() {
					$('.bottom-gallery a').Chocolat();
				});
			</script>
		</div>
		<div class="testimonials">
			<h3>Testimonials</h3>
			<p>lorem ipsum simply a dummy text to format fonts and paragraphs</p>
		</div>
	</div>
</div>
<div class="our-team">
	<div class="container">
		<div class="team-gallery">
			<ul>
				<li class="col-md-2 tem-gal">
					<img src="./images/aa.jpg" alt="" class="img-responsive"></img>
					<h4>eva green</h4>
					<p>when an unknown printer took a galley</p>
				</li>
				<li class="col-md-2 tem-gal">
					<img src="./images/ab.jpg" alt="" class="img-responsive"></img>
					<h4>mike thomas</h4>
					<p>when an unknown printer took a galley</p>
				</li>
				<li class="col-md-2 tem-gal">
					<img src="./images/ac.jpg" alt="" class="img-responsive"></img>
					<h4>andrew wayne</h4>
					<p>when an unknown printer took a galley</p>
				</li>
				<li class="col-md-2 tem-gal">
					<img src="./images/ad.jpg" alt="" class="img-responsive"></img>
					<h4>chumlee</h4>
					<p>when an unknown printer took a galley</p>
				</li>
				<li class="col-md-2 tem-gal">
					<img src="./images/ae.jpg" alt="" class="img-responsive"></img>
					<h4>cody</h4>
					<p>when an unknown printer took a galley</p>
				</li>
				<li class="col-md-2 tem-gal">
					<img src="./images/af.jpg" alt="" class="img-responsive"></img>
					<h4>ema</h4>
					<p>when an unknown printer took a galley</p>
				</li>
				<div class="clearfix"></div>
			</ul>
		</div>
	</div>
</div>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
<div class="subscribe-label">
	<div class="container">
		<div class="sub-cont">
			<div class="col-md-6">
				<h3>Subscribe to our newsletter</h3>
			</div>
			<div class="col-md-6">
				<form>
					<input class="mail" type="text" name="email" value="E mail" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'E mail';}">
					<button type="button" class="btn btn-warning sub-btn">Notify</button>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
include_once "footer.php"
?>
