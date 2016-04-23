<?php
include_once 'include.php';
if(!session_id())
    session_start();
?>
<!doctype html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!meta charset utf="8">
    <!--flexslider-css-->
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
    <link href="css/mordern-business.css" rel='stylesheet' type='text/css' />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <!--fonts-->
    <link href='http://fonts.useso.com/css?family=Coda:400,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>
    <!--script-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        //jQuery is required to run this code
        $( document ).ready(function() {

            scaleVideoContainer();

            initBannerVideoSize('.video-container .poster img');
            initBannerVideoSize('.video-container .filter');
            initBannerVideoSize('.video-container video');

            $(window).on('resize', function() {
                scaleVideoContainer();
                scaleBannerVideoSize('.video-container .poster img');
                scaleBannerVideoSize('.video-container .filter');
                scaleBannerVideoSize('.video-container video');
            });

        });

        function scaleVideoContainer() {

            var height = $(window).height() + 5;
            var unitHeight = parseInt(height) + 'px';
            $('.homepage-hero-module').css('height',unitHeight);

        }

        function initBannerVideoSize(element){

            $(element).each(function(){
                $(this).data('height', $(this).height());
                $(this).data('width', $(this).width());
            });

            scaleBannerVideoSize(element);

        }

        function scaleBannerVideoSize(element){

            var windowWidth = $(window).width(),
                    windowHeight = $(window).height() + 5,
                    videoWidth,
                    videoHeight;

            console.log(windowHeight);

            $(element).each(function(){
                var videoAspectRatio = $(this).data('height')/$(this).data('width');

                $(this).width(windowWidth);

                if(windowWidth < 1000){
                    videoHeight = windowHeight;
                    videoWidth = videoHeight / videoAspectRatio;
                    $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

                    $(this).width(videoWidth).height(videoHeight);
                }

                $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

            });
        }
    </script>
    <!--script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <style>
        pre {
            border: 1px grey dotted;
            padding: 1em;
        }

        #bs-example-navbar-collapse-1 {
            position: relative;
            top: 5px;
        }

        .collapse li a {
            font-size: 120%;
            font-family: Arial;
        }

        .homepage-hero-module {
            border-right: none;
            border-left: none;
            position: relative;
        }

        .no-video .video-container video,
        .touch .video-container video {
            display: none;
        }

        .no-video .video-container .poster,
        .touch .video-container .poster {
            display: block !important;
        }

        .video-container {
            position: relative;
            bottom: 0%;
            left: 0%;
            height: 100%;
            width: 100%;
            overflow: hidden;
            background: #000;
        }

            .video-container .poster img {
                width: 100%;
                bottom: 0;
                position: absolute;
            }

            .video-container .filter {
                z-index: 100;
                position: absolute;
                background: rgba(0, 0, 0, 0.4);
                width: 100%;
            }

            .video-container video {
                position: fixed;
                z-index: 0;
                bottom: 0;
            }

                .video-container video.fillWidth {
                    width: 100%;
                }
    </style>
    <!--fonts-->
</head>
<body style="background-image:url('images/background.gif');background-size: 360px 360px;">
    <!--<div class="homepage-hero-module" style="position: fixed;">
        <div class="video-container">
            <video autoplay loop class="fillWidth"; style="opacity: 0.8;">
                <source src="MP4/Up.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                <source src="WEBM/Up.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
            <div class="poster hidden">
                <img src="Snapshots/Up.jpg" alt="">
            </div>
        </div>
    </div>-->
<div class="header" id="home" style="position:fixed; width:100%;z-index:10;">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span style="color:white;">UST</span>eacher</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                    <li><a href="index.php"><span data-hover="Home">Home</span></a></li>
                    <li class="dropdown">
                        <a href="about.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Reviews">Reviews</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html"><span data-hover="UROP">UROP</span></a></li>
                            <li><a href="Pages.html"><span data-hover="LANG">LANG</span></a></li>
                            <li>
                                <a href="newComment.php"><span data-hover="LABU">LABU</span></a>
                            </li>
                        </ul>
                        <?php
                        if(isset($_SESSION['username'])){
                            echo "<li><a href=\"doAction.php?act=userOut\"><span data-hover=\"logout\">";
                            echo $_SESSION['username'];
                            echo "</span></a></li>";
                        }
                        else if(isset($_COOKIE['username'])){
                            echo "<li><a href=\"doAction.php?act=userOut\"><span data-hover=\"logout\"><span style='color: yellow'>";
                            echo $_SESSION['username'];
                            echo "</span></span></a></li>";
                        }
                        else{
                            echo " <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span data-hover=\"login\">login</span><span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <form class=\"form-inline\" action=\"doAction.php?act=login\" method=\"post\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"username\" id=\"exampleInputName2\" placeholder=\"your username\" style=\"padding:10px,10px,10px,10px;\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" style=\"padding:10px,10px,10px,10px;\">
                                </div>
                                <button type=\"submit\" clsass=\"btn\" style=\"padding:10px,10px,10px,10px;\">login</button>
                            </form>
                            </li>
                        </ul>";
                        }
                        ?>
                    <li><a href="register.php"><span data-hover="register">register</span></a></li>
                </ul>

                <div class="clearfix"></div>
            </div><!-- /.navbar-collapse -->
            <div class="clearfix"></div>
        </div><!-- /.container-fluid -->
    </nav>
    </div>
