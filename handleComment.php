<?php
require_once 'include.php';
include_once 'header.php';
if(!session_id())
    session_start();
?>


    <?php
    if($_POST)
    {
        $pid=$_GET['pid'];
        $projid=$_GET['projid'];
        #$prof=$_GET['prof'];
        #$proj=$_GET['proj'];
        #$email=$_GET['email'];
        #$projdesc=$_GET['proj-desc'];
        $rating=$_POST['rating'];
        $written=$_POST['written'];
        /*
        $query_p = "SELECT t.department, t.name, t.email, p.proj_name, p.description  FROM professor t, project p WHERE t.p_id=p.p_id and t.p_id='$pid' and p.proj_id='$projid'";
        $result1 = mysqli_query($link,$query_p);
        $result1 = mysqli_fetch_all($result1);
        $dept = implode($result1[0]);
        $prof = implode($result1[1]);
        $email = implode($result1[2]);
        $proj = implode($result1[3]);
        $description = implode($result1[4]);*/
        //insert(`professor`,$newProf,$link);
        $sql = "SELECT count(*) FROM comments WHERE p_id=$pid";
        $number = mysqli_query($link,$sql);
        $number = mysqli_fetch_assoc($number);
        $number = implode("",$number);
        $sql = "SELECT star FROM professor WHERE p_id=$pid";
        $preStar = mysqli_query($link,$sql);
        $preStar = mysqli_fetch_assoc($preStar);
        if (empty($preStar))
            $sql = "UPDATE professor SET star='$rating' WHERE p_id='$pid'";
        else
        {
            $preStar = implode("",$preStar);
            $newStar = ($preStar * $number + $rating)/($number + 1);
            $sql="UPDATE professor SET star='$newStar' WHERE p_id = '$pid'";
        }
        mysqli_query($link,$sql);
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
        if ($written=="false")
            $sql="INSERT INTO comments(p_id,u_id, proj_id, c_teacher,c_project,c_workload,time) VALUES ('$pid','$uid', '$projid', '$c_teacher','$c_project','$c_workload','$time')";
        else
            $sql="UPDATE comments SET c_teacher='$c_teacher', c_project='$c_project', c_workload='$c_workload' WHERE p_id='$pid' AND u_id='$uid' AND proj_id='$projid'";
        mysqli_query($link,$sql);
        mysqli_close($link);
    }
    ?>

    <div class="submit-page">
        <div class="submit-body">
            <div style="height: 150px"></div>
            <h3>Your comment is submitted successfully!</h3>
            <div class="row" style="margin-top: 150px; text-align: center">

                <?php
                    echo "<a href=\"show.php?pid=$pid&projid=$projid&written=true\">
                    <span class=\"btn btn-primary mrg\">View This Project</span>
                </a>";
                ?>
                <a href="urop.php">
                    <span class="btn btn-primary mrg">Back to Project List</span>
                </a>
                <a href="index.php">
                    <span class="btn btn-primary mrg">Back to Homepage</span>
                </a>
            </div>
        </div>
    </div>

    <?php
include_once "footer.php"
    ?>
