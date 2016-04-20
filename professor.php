<?php
include_once 'header.php';
$pid=$_GET['pid'];
$sql="select * from professor where p_id=".$pid;
$professor=fetchOne($sql,$link);
$projectNoSql="select count(proj_id) from project where p_id=".$pid;
$result=mysqli_query($link,$projectNoSql);
$projectNo=mysqli_fetch_assoc($result);
$projectNo=$projectNo['count(proj_id)'];
?>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php echo $professor['name']."  "?>
                <small>
                    <?php echo $professor['department']."  "?>
                </small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Professor</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <!-- Blog Post Row -->
    <div class="row">
        <div class="col-md-2">
            <img src=<?php echo $professor['image']."  "?> alt="..." class="img-thumbnail" style="width:100%;"/>
        </div>
        <div class="col-md-10">
            <h3>
                    Pro. <?php echo $professor['name']."  "?>
                <button class="btn btn-info" type="button">
                    Star
                    <span class="badge">
                        <?php echo $professor['star']?>
                    </span>
                </button>
            </h3>
            <table class="table table-hover table-striped">
                <tr>
                    <th width="40%">Research Area</th>
                    <th width="60%">
                        <?php echo $professor['research']?>
                    </th>
                </tr>
                <tr>
                    <th width="40%">Research Area</th>
                    <th width="60%">
                        <a href="mailto:<?php echo $professor['email']?>" title="Send Email">
                            <?php echo $professor['email']?>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th width="40%">Department</th>
                    <th width="60%">
                        <?php echo $professor['department']?>
                    </th>
                </tr>
                <tr>
                    <th width="40%">No.of Project</th>
                    <th width="60%">
                        <?php echo $projectNo?>
                    </th>
                </tr>
            </table>
            <a class="btn btn-primary" href="blog-post.html">
                Read More
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <hr />

    <!-- Pager -->
    <div class="row">
        <ul class="pager">
            <li class="previous">
                <a href="#">&larr; Older</a>
            </li>
            <li class="next">
                <a href="#">Newer &rarr;</a>
            </li>
        </ul>
    </div>
    <!-- /.row -->


</div>
<?php
require_once 'footer.php';
?>
