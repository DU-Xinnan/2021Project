<?php
include_once 'header.php';
require_once 'include.php';

$pid = $_GET['pid'];
$projid = $_GET['projid'];
$written = $_GET['written'];

echo "Here shows the following project:\n";

$query = "SELECT * FROM project WHERE p_id='$pid' AND proj_id='$projid'";
$result = mysqli_query($link,$query);
$proj = mysqli_fetch_assoc($result);
$query = "SELECT * FROM professor WHERE p_id='$pid'";
$result = mysqli_query($link,$query);
$prof = mysqli_fetch_assoc($result);
$query = "SELECT c_teacher, c_project, c_workload, FROM_UNIXTIME(time), u_id FROM comments WHERE p_id='$pid' AND proj_id='$projid' ORDER BY time DESC";
$result = mysqli_query($link,$query);
$com = mysqli_fetch_all($result);
?>
<div class="urop-page show">
    <div class="container">
        <h3></h3>
        <h3 id="showTitle" style="margin-top: 150px; margin-bottom: 2em;">
            <?php echo "$proj[proj_name]"; ?>
        </h3>
        <label for="info-table">Detailed Information</label>
        <table class="table table-sm" id="info-table">
            <tr>
                <th>Department:</th>
                <td>
                    <?php echo "$prof[department]"; ?>
                </td>
            </tr>
            <tr>
                <th>Supervisor Name:</th>
                <td>
                    <?php echo "<a href=\"professor.php?pid=$pid\">$prof[name]</a>"; ?>
                </td>
            </tr>
            <tr>
                <th>Supervisor Email:</th>
                <td>
                    <?php echo "$prof[email]"; ?>
                </td>
            </tr>
            <tr>
                <th>Project Description:</th>
                <td>
                    <?php echo "$proj[description]"; ?>
                </td>
            </tr>
        </table>

        <div class="row" style="width: 100%; position: relative; margin-bottom: 10px; margin-left: 0;">
            <h4 style="left: 0">Comments</h4>
            <!--<label for="show-write-button">Comments</label>-->
            <button class="btn btn-info" id="show-write-button" style="margin-top: -2.5em;">
            <?php
            if ($written=="true")
                echo "<a href=\"newComment.php?pid=$pid&projid=$projid&written=true\" style=\"color: white;\">Modify Comment</a>";
            else
                echo "<a href=\"newComment.php?pid=$pid&projid=$projid&written=false\" style=\"color: white;\">Write Comment</a>";
                ?>
            </button>
        </div>
        <?php
        if (empty($com)) {
            echo "<div class=\"alert alert-danger\">";
            echo "<strong>No comment for now! </strong>Click the button to write your comment on it.</div>"; }
        foreach ($com as $cur)
        {
            $query = "SELECT username FROM user WHERE u_id=$cur[4]";
            $username = mysqli_query($link,$query);
            $username = mysqli_fetch_assoc($username);
            $username = implode("",$username);
            echo "<ul style=\"margin: 0 0 0 0;\">";
            echo "<li class=\"list-group-item list-group-item-info\" style=\"width: 50%; float: left; clear: left;\"><strong>Author: </strong>$username</li>";
            echo "<li class=\"list-group-item list-group-item-info\" style=\"width: 50%; float: right; clear: right;\"><strong>Time: </strong>$cur[3]</li>";
            echo "<li class=\"list-group-item\" style=\"width: 100%; float: left;\"><strong>Supervisor: </strong><br /><br />$cur[0]</li>";
            echo "<li class=\"list-group-item\" style=\"width: 100%; float: left;\"><strong>Project: </strong><br /><br />$cur[1]</li>";
            echo "<li class=\"list-group-item\" style=\"width: 100%; float: left; margin-bottom: 3em;\"><strong>Workload: </strong><br /><br />$cur[2]</li></ul>";
        }



        ?>

    </div>
</div>

<?php
include_once 'footer.php';
?>