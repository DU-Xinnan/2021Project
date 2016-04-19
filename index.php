<?php
include_once "header.php"
//红色：#d80b36 !important
//亮蓝：#00BFE9 !important 
?>
<div class="header-banner">
	<!-- Top Navigation -->
	<div class="container page-seperator" style="height:700px;">
		<section class="color bgi">
			<h3>A Place Where You Can Find A Better Professor</h3>
            <button type="button" onclick="javascript:window.location.href='#more'" class="btn btn-warning but1">View Details</button>
		</section>
	</div>
</div>
<section class="slider">
	<div class="container" style="height: 50px; position:relative; top:-30px;">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="banner-info">
						<h3>LANG</h3>
					</div>
				</li>
				<li>
					<div class="banner-info">
						<h3>UROP</h3>
					</div>
				</li>
				<li>
					<div class="banner-info">
						<h3>LABU</h3>
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
<div class="container" id="more">
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to UST<span style="color:#00BFE9 !important;">eacher</span>
            </h1>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-fw fa-check"></i>UROP</h2>
                </div>
                <div class="panel-body">
                    <p>The Undergraduate Research Opportunities Program, or UROP for short,
                     is a HKUST signature program designed to provide undergraduate students 
                    with an exciting opportunity to engage in academic research, thereby helping 
                    them to develop insightful perspectives on their areas of interest and advance the frontiers of knowledge.
                     Launched in 2005, UROP is offered every summer to allow students to immerse themselves in a variety of 
                    tailor-made research projects under the supervision of world-class researchers.</p>
                    <a href="#" class="btn btn-default">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="our-work" id="our-work">
        <div class="container">
            <h2>Areas</h2>
            <p>UROP, Lang, Labu</p>
            <div class="gallery-bottom">
                <div class="col-md-4 bottom-gallery">
                    <a href="./images/IMG_3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <img class="img-responsive img-thumbnail" src="images/UROP.png" style="height:283px;width:283px;"/>
                        <div class="b-wrapper">
                            <h3 class="b-animate b-from-left    b-delay03 ">
                                <span class="txt">UROP</span>
                                <span class="glyphicon glyphicon-arrow-right gal-icn" aria-hidden="true"></span>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 bottom-gallery">
                    <a href="images/IMG_1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <img class="img-responsive img-thumbnail" src="images/lang2030.jpg" style="height:283px;width:283px;"/>
                        <div class="b-wrapper">
                            <h3 class="b-animate b-from-left    b-delay03 ">
                                <span class="txt">LANG</span>
                                <span class="glyphicon glyphicon-arrow-right gal-icn" aria-hidden="true"></span>
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 bottom-gallery">
                    <a href="images/IMG_5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <img class="img-responsive img-thumbnail " src="images/IMG_5.jpg" style="height:283px;width:283px;"/>
                        <div class="b-wrapper">
                            <h3 class="b-animate b-from-left    b-delay03 ">
                                <span class="txt">LABU</span>
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
                    $(function () {
                        $('.bottom-gallery a').Chocolat();
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Our Team</h2>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>
                        John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>
                        John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>
                        John Smith<br>
                        <small>Job Title</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>
    </div>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/">企业网站模板</a></div>
    </div>
    <?php
include_once "footer.php"
    ?>
