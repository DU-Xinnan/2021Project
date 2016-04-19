<?php
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
    <!--script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <!--fonts-->
</head>
<body>
<div class="header" id="home">
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
                        <a href="about.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="About">About</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html"><span data-hover="Action">Action</span></a></li>
                            <li><a href="Pages.html"><span data-hover="Pages">Pages</span></a></li>
                            <li>
                            <?php
                                if(!isset($_SESSION['username'])){
                                    echo "<a href=\"register.php\"><span data-hover=\"Register\">Write Comment</span></a>";
                                }
                                else{
                                    echo "<a href=\"newComment.php\"><span data-hover=\"Write Comment\">Write Comment</span></a>";
                                }
                            ?>
                            </li>
                            <li><a href="contact.html"><span data-hover="Contact">Contact</span></a></li>
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
