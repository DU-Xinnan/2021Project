<?php
include_once 'header.php';
require_once 'include.php';

$pid = $_GET['pid'];
$projid = $_GET['projid'];
$written = $_GET['written'];
$username = $_SESSION['username'];
$sql = "SELECT u_id FROM user WHERE username='$username'";
$result = mysqli_query($link,$sql);
$result = mysqli_fetch_assoc($result);
$uid = implode("",$result);

if ($written!="false")
{
    $sql = "SELECT c_teacher, c_project, c_workload FROM comments WHERE u_id='$uid' AND p_id='$pid' AND proj_id='$projid'";
    $result = mysqli_query($link,$sql);
    $result = mysqli_fetch_assoc($result);
    $cprof = $result['c_teacher'];
    $cproj = $result['c_project'];
    $cwl = $result['c_workload'];
    $sql = "SELECT star FROM professor WHERE p_id='$pid'";
    $result = mysqli_query($link,$sql);
    $result = mysqli_fetch_assoc($result);
    $rating = implode("",$result);
}


?>

    <div class="write-page">
        <h3>Write a New Comment</h3>
        
    <div class="container">
        <?php
        
        echo "<form action=\"handleComment.php?pid=$pid&projid=$projid\" method=\"post\" id=\"comment-form\">";
            ?>
            
                <div class="row">
                    <!--selection of department-->
                    <div class="form-group">
                        <div class="col-md-5 write sel">
                            <label for="selDept">Department</label>
                            <?php
                            $query = "SELECT DISTINCT department FROM professor WHERE p_id='$pid'";
                            $result = mysqli_query($link,$query);
                            $result = mysqli_fetch_assoc($result);
                            $resultDept = implode("",$result);
                            echo "<input type=\"text\" class=\"form-control\" id=\"selDept\" name=\"dept\" value='$resultDept' disabled />";
                            ?>
                        </div>
                    </div>
                    <!--end selection of department-->
                    <!--professor name-->
                    <div class="form-group">
                        <div class="col-md-5 write sel">
                            <label for="prof">Professor</label>
                            <?php
                            $query = "SELECT DISTINCT name FROM professor WHERE p_id='$pid'";
                            $result = mysqli_query($link,$query);
                            $result = mysqli_fetch_assoc($result);
                            $resultProf = implode("",$result);
                            echo "<input type=\"text\" class=\"form-control\" id=\"prof\" name=\"prof\" value='$resultProf' disabled />";
                            ?>
                            <!--<p>Full name of professor</p>-->
                        </div>
                    </div>
                </div>
                <!--proj-name-->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-5 write">
                            <label for="proj">Project</label>
                            <?php
                            $query = "SELECT DISTINCT proj_name FROM project WHERE p_id='$pid' and proj_id='$projid'";
                            $result = mysqli_query($link,$query);
                            $result = mysqli_fetch_assoc($result);
                            $resultProj = implode("",$result);
                            echo "<input type=\"text\" class=\"form-control\" id=\"proj\" name=\"proj\" value='$resultProj' disabled/>";
                            ?>
                        </div>
                        <!--email-->
                        <div class="form-group">
                            <div class="col-md-5 write">
                                <label for="email">E-mail</label>
                                <?php
                                $query = "SELECT DISTINCT email FROM professor WHERE p_id='$pid'";
                                $result = mysqli_query($link,$query);
                                $result = mysqli_fetch_assoc($result);
                                $resultEmail = implode("",$result);
                                echo "<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value='$resultEmail' disabled />";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--project description-->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-11 write">
                            <label for="desc">Project Description</label>
                            <?php
                            $query = "SELECT DISTINCT description FROM project WHERE p_id='$pid' and proj_id='$projid'";
                            $result = mysqli_query($link,$query);
                            $result = mysqli_fetch_assoc($result);
                            $resultDesc = implode("",$result);
                            echo "<textarea class=\"form-control\" rows=\"8\" id=\"desc\" name=\"proj-desc\" disabled>$resultDesc</textarea>";
                            ?>
                        </div>
                    </div>
                </div>
                <!--End of project description-->
                <!--Rating-->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-11 write">
                            <label for="rate">Rating for This Professor</label>
                            <div id="rate">
                                <label class="radio-inline" id="rate-number">
                            <?php
                            echo "<input type=\"hidden\" name=\"written\" value='$written' />";
                                if ($written!="false"){
                                    echo "<input type=\"hidden\" name=\"rating\" value='$rating' />";
                                    echo"<input type=\"radio\" name=\"rating\" value=\"1\" disabled />";
                                }
                                else
                                    echo"<input type=\"radio\" name=\"rating\" value=\"1\" required />";
                            ?>
                                    1
                                </label>
                                <label class="radio-inline" id="rate-number">
                            <?php
                            if ($written!="false")
                                echo"<input type=\"radio\" name=\"rating\" value=\"2\" disabled />";
                            else
                                echo"<input type=\"radio\" name=\"rating\" value=\"2\" required />";
                            ?>
                                    2
                                </label>
                                <label class="radio-inline" id="rate-number">
                            <?php
                            if ($written!="false")
                                echo"<input type=\"radio\" name=\"rating\" value=\"3\" disabled />";
                            else
                                echo"<input type=\"radio\" name=\"rating\" value=\"3\" required />";
                            ?>
                                    3
                                </label>
                                <label class="radio-inline" id="rate-number">
                            <?php
                            if ($written!="false")
                                echo"<input type=\"radio\" name=\"rating\" value=\"4\" disabled />";
                            else
                                echo"<input type=\"radio\" name=\"rating\" value=\"4\" required />";
                            ?>
                                    4
                                </label>
                                <label class="radio-inline" id="rate-number">
                            <?php
                            if ($written!="false")
                                echo"<input type=\"radio\" name=\"rating\" value=\"5\" disabled />";
                            else
                                echo"<input type=\"radio\" name=\"rating\" value=\"5\" required />";
                            ?>
                                    5
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of rating-->
                <!--Comment-->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-11 write">
                            <label for="c-prof">Comment on Professor</label>
                            <?php
                            if($written!="false")
                                echo"<textarea class=\"form-control\" rows=\"8\" id=\"c-prof\" name=\"c-prof\">$cprof</textarea>";
                            else
                                echo"<textarea class=\"form-control\" rows=\"8\" id=\"c-prof\" name=\"c-prof\" placeholder=\"Type your comment on the professor here:\" maxlength=\"1000\"></textarea>";
                            ?>
                            <p id="warning">Write comment within 1000 characters.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-11 write">
                            <label for="c-proj">Comment on Project</label>
                    <?php
                    if($written!="false")
                        echo"<textarea class=\"form-control\" rows=\"8\" id=\"c-proj\" name=\"c-proj\">$cproj</textarea>";
                    else
                        echo"<textarea class=\"form-control\" rows=\"8\" id=\"c-proj\" name=\"c-proj\" placeholder=\"Type your comment on the project here:\" maxlength=\"1000\"></textarea>";
                    ?>
                            <p id="warning">Write comment within 1000 characters.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-11 write">
                    <label for="c-wl">Comment on Workload</label>
                    <?php
                    if($written!="false")
                        echo"<textarea class=\"form-control\" rows=\"8\" id=\"c-wl\" name=\"c-wl\">$cwl</textarea>";
                    else
                        echo"<textarea class=\"form-control\" rows=\"8\" id=\"c-wl\" name=\"c-wl\" placeholder=\"Type your comment on workload of this project here:\" maxlength=\"500\"></textarea>";
                    ?>
                            <p id="warning">Write comment within 500 characters.</p>
                        </div>
                    </div>
                </div>
                <!--End of comment-->
                <input type="submit" name="submit" value="Submit" class="btn btn-primary mrg" />
            
        </form>
        </div>
    </div>
    <a href="#home" id="toTop" class="scroll" style="display: block;">
        <span id="toTopHover" style="opacity: 1;"></span>
    </a>
<?php
include_once "footer.php"
?>