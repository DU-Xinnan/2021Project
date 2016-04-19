<?php
include_once "header.php"
?>

<!doctype html>
<html>
	<head>
		<title>Write A New Comment</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!meta charset utf="8">
		<!--flexslider-css-->
		<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
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
        <div class="newComment-page">
            <div class="newComment">
                <h3>Write a New Comment</h3>
                    <form action="handleComment.php" method="post" id="comment-form">
                        <div class="container">
                            <!--professor name-->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-5 write">
                                        <label for="prof">Professor</label>
                                        <input type="text" class="form-control" id="prof" name="prof" required maxlength="20"/>
                                        <p>Full name of professor</p>
                                    </div>
                                </div>
                                <!--gender-->
                                <div class="col-md-5 write">
                                    <label for="gender">Rating for This Project</label>
                                    <div id="gender">
                                        <label class="radio-inline" id="rate-number"><input type="radio" name="gender" value='male' required/>Male</label>
                                        <label class="radio-inline" id="rate-number"><input type="radio" name="gender" value='female' />Female</label>
                                    </div>
                                </div>
                            </div>
                            <!--email-->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-5 write">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" required maxlength="50"/>
                                        <p>E-mail of professor</p>
                                    </div>
                                </div>
                                <!--selection of department-->
                                <div class="form-group">
                                    <div class="col-md-5 write sel">
                                        <label for="selDept">Department</label>
                                        <select class="form-control" id="selDept" name="dept" required>
                                            <option value></option>
                                            <option value="CBME">CBME</option>
                                            <option value="CHEM">CHEM</option>
                                            <option value="CIVL">CIVL</option>
                                            <option value="CSE">CSE</option>
                                            <option value="ECE">ECE</option>
                                            <option value="IELM">IELM</option>
                                            <option value="LIFS">LIFS</option>
                                            <option value="MATH">MATH</option>
                                            <option value="PHYS">PHYS</option>
                                        </select>
                                    </div>
                                </div><!--end selection of department-->
                            </div>
                            <!--proj-name-->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-5 write">
                                        <label for="proj">Project</label>
                                        <input type="text" class="form-control" id="proj" name="proj" required maxlength="200"/>
                                        <p>Full name of project</p>
                                    </div>
                                </div>
                                <!--research area-->
                                <div class="form-group">
                                    <div class="col-sm-5 write">
                                        <label for="research">Research Area</label>
                                        <input type="text" class="form-control" id="research" name="research" required maxlength="20"/>
                                        <p>Research area of this project</p>
                                    </div>
                                </div>
                            </div>
                            <!--project description-->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-11 write">
                                        <label for="desc">Project Description</label>
                                        <textarea class="form-control" rows="8" id="desc" name="proj-desc" placeholder="Type brief description to this project here:" maxlength="1000"></textarea>
                                        <p id="warning">Describe this project within 1000 characters.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End of project description-->
                            <!--Rating-->
                            <div class="row">
                                <div class="col-md-11 write">
                                    <label for="rate">Rating for This Project</label>
                                    <div id="rate">
                                        <label class="radio-inline" id="rate-number"><input type="radio" name="rating" value="1" required/>1</label>
                                        <label class="radio-inline" id="rate-number"><input type="radio" name="rating" value="2" />2</label>
                                        <label class="radio-inline" id="rate-number"><input type="radio" name="rating" value="3" />3</label>
                                        <label class="radio-inline" id="rate-number"><input type="radio" name="rating" value="4" />4</label>
                                        <label class="radio-inline" id="rate-number"><input type="radio" name="rating" value="5" />5</label>
                                    </div>
                                </div>
                            </div>
                            <!--End of rating-->
                            <!--Comment-->
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-11 write">
                                        <label for="c-prof">Comment on Professor</label>
                                        <textarea class="form-control" rows="8" id="c-prof" name="c-prof" placeholder="Type your comment on the professor here:" maxlength="1000"></textarea>
                                        <p id="warning">Write comment within 1000 characters.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-11 write">
                                        <label for="c-proj">Comment on Project</label>
                                        <textarea class="form-control" rows="8" id="c-proj" name="c-proj" placeholder="Type your comment on the project here:" maxlength="1000"></textarea>
                                        <p id="warning">Write comment within 1000 characters.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-11 write">
                                        <label for="c-wl">Comment on Workload</label>
                                        <textarea class="form-control" rows="8" id="c-wl" name="c-wl" placeholder="Type your comment on workload of this project here:" maxlength="500"></textarea>
                                        <p id="warning">Write comment within 500 characters.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End of comment-->
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary mrg" />
                        </div>
                    </form>
            </div>  
        </div>
            <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>
<?php
include_once "footer.php"
?>