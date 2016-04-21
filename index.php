<?php
include_once "header.php";
//红色：#d80b36 !important
//亮蓝：#00BFE9 !important 
$toprated= gettop($link);
?>
<div class="header-banner" style="position:relative;top:80px;">
	<!-- Top Navigation -->
	<div class="container page-seperator">
		<section class="color bgi">
			<h3>A Place Where You Can Find A Better Professor</h3>
            <button type="button" onclick="javascript:window.location.href='#more'" class="btn btn-warning but1 scroll">View Details</button>
		</section>
	</div>
</div>
<section class="slider" style="position:relative;top:70px;">
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
<div class="container" id="more"style="position:relative;top:70px; width:80%;">
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to UST<span style="color:#00BFE9 !important;">eacher</span>
            </h1>
        </div>
        <a href="#" class="alert-link">
        <div class="alert alert-success col-md-4" role="alert" style="height: 300px;">
            <h1 style="text-align: center;position:relative;top:100px;;"><span class="glyphicon glyphicon-registration-mark"></span><strong> UROP</strong><br><button type="button" class="btn btn-success">See Details</button></h1>
        </div>
        </a>
        <a href="#" class="alert-link">
            <div class="alert alert-info col-md-4" role="alert" style="height: 300px;">
                <h1 style="text-align: center;position:relative;top:100px;;"><span class="glyphicon glyphicon-warning-sign"></span><strong> LANG</strong><br><button type="button" class="btn btn-info">See Details</button></h1>
            </div>
        </a>
        <a href="#" class="alert-link">
            <div class="alert alert-warning col-md-4" role="alert" style="height: 300px;">
                <h1 style="text-align: center;position:relative;top:100px;;"><span class=" glyphicon glyphicon-time"></span><strong> LABU</strong><br><button type="button" class="btn btn-default">See Details</button></h1>
            </div>
        </a>
    </div>

    <div class="our-work" id="our-work">
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
    <div class="container" style="width: 70%;">
        <div class="row" style="position:relative;">
            <div class="col-lg-12">
                <h2 class="page-header" style="text-align:center;">Recommandations</h2>
            </div>
            <?php foreach($toprated as $row):  ?>
            <div class="col-md-4 text-center">
                <div class="thumbnail" style="background-color:  #d9edf7">
                    <div class="caption">
                        <h3>
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <strong>
                                <a href=<?php echo "professor.php?pid=".$row['p_id']."  "?>><?php echo $row['name']."  "?></a>
                            </strong>
                            <span style="color:#00BFE9 !important;">
                                <?php echo $row['department']?>
                            </span>
                        </h3>
                        <hr>
                        <table class="table">
                            <tr>
                                <th width="40%">Research Area</th>
                                <th width="60%">
                                    <?php echo $row['research']?>
                                </th>
                            </tr>
                            <tr>
                                <th width="40%">Research Area</th>
                                <th width="60%">
                                    <a href="mailto:<?php echo $row['email']?>" title="Send Email">
                                        <?php echo $row['email']?>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th width="40%">Department</th>
                                <th width="60%">
                                    <?php echo $row['department']?>
                                </th>
                            </tr>
                            <tr>
                                <th width="40%">Star</th>
                                <th width="60%">
                                    <button class="btn btn-success" type="button">
                                        Star
                                        <span class="badge">
                                            <?php echo $row['star']?>
                                        </span>
                                    </button>
                                </th>
                            </tr>
                        </table>
                        <p></p>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
    </div>
    </div>
    <?php
include_once "footer.php"
    ?>
