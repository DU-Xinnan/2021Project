<?php
include_once 'header.php';
require_once 'include.php';
?>
<!doctype html>
<html>
<head>
    <title>Submitted Successfully</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!meta charset utf="8">
    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--fonts-->
    <link href='http://fonts.useso.com/css?family=Coda:400,800' rel='stylesheet' type='text/css' />
    <link href='http://fonts.useso.com/css?family=Jockey+One' rel='stylesheet' type='text/css' />
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

<?php
    if($_POST)
    {

        $dept=$_POST['dept'];
        $prof=$_POST['prof'];
        $proj=$_POST['proj'];
        $email=$_POST['email'];
        $projdesc=$_POST['proj-desc'];
        $rating=$_POST['rating'];
        $research=$_POST['research'];
        $gender=$_POST['gender'];

        //insert(`professor`,$newProf,$link);
        $sql="INSERT INTO professor(department,name,projects,email,j_description,star,research,sex) VALUES ('$dept','$prof','$proj','$email','$projdesc','$rating','$research','$gender')";
        mysqli_query($link,$sql);

        $query_p="SELECT MAX(p_id) FROM professor";
        $result1=mysqli_query($link,$query_p);
        $pid=mysqli_fetch_assoc($result1);
        $pid=implode("",$pid);
        //print_r($pid);
        $user=$_SESSION['username'];

        $query_u="SELECT u_id FROM user WHERE username='$user'";
        $result2=mysqli_query($link,$query_u);
        $uid=mysqli_fetch_assoc($result2);
        $uid=implode("",$uid);
        //print "test";
        //print "$user";
        //print_r($uid);
        //print ($pid);
        /*
        $newComment['c_teacher']=$_POST['c-prof'];
        $newComment['c_project']=$_POST['c-proj'];
        $newComment['c_workload']=$_POST['c-wl'];
        $newComment['time']=time();
        $newComment['p_id']=$pid;
        $newComment['u_id']=$uid;*/

        $c_teacher=$_POST['c-prof'];
        $c_project=$_POST['c-proj'];
        $c_workload=$_POST['c-wl'];
        $time=time();

        //insert(`comments`,$newComment,$link);
        $sql="INSERT INTO comments(p_id,u_id,c_teacher,c_project,c_workload,time) VALUES ('$pid','$uid','$c_teacher','$c_project','$c_workload','$time')";
        mysqli_query($link,$sql);

        mysqli_close($link);
    }
    
?>

    <div class="submit-page">
        <div class="submit-body">
            <h3>Your comment is submitted successfully!</h3>
            <div class="row">
                <a href="#">
                    <span class="btn btn-primary mrg">View Your Comment</span>
                </a>
                <a href="newComment.php">
                    <span class="btn btn-primary mrg">Write Another Comment</span>
                </a>
                <a href="index.php">
                    <span class="btn btn-primary mrg">Back to Homepage</span>
                </a>
            </div>
        </div>
    </div>

</body>
</html>

<?php
include_once "footer.php"
?>