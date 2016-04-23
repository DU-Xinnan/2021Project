<?php
include_once 'header.php';
$pid=$_GET['pid'];
$sql="select * from professor where p_id=".$pid;
$professor=fetchOne($sql,$link);
//get the
$projectSql="select * from project where p_id=".$pid;
$project=fetchAll($projectSql,$link);
$projectNo=count($project);
?>
<div class="container" style="position: relative;top:100px;">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <span class="label label-success"><?php echo $professor['name']."  "?></span>
                <span class="label label-warning" style="margin-left: 10px;"><?php echo $professor['department']."  "?></span>
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
            <h2>
                    Pro. <?php echo $professor['name']."  "?>
                <button class="btn btn-info" type="button">
                    Star
                    <span class="badge">
                        <?php echo $professor['star']?>
                    </span>
                </button>
            </h2>
            <table class="table table-hover table-condensed">
                <tr>
                    <th width="30%">Research Area</th>
                    <th width="70%">
                        <?php echo $professor['research']?>
                    </th>
                </tr>
                <tr>
                    <th width="30%">Email</th>
                    <th width="70%">
                        <a href="mailto:<?php echo $professor['email']?>" title="Send Email">
                            <?php echo $professor['email']?>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th width="30%">Department</th>
                    <th width="70%">
                        <?php echo $professor['department']?>
                    </th>
                </tr>
                <tr>
                    <th width="30%">Homepage</th>
                    <th width="7 0%">
                        <a href="<?php echo $professor['homepage'];?>"><?php echo $professor['homepage'];?></a>
                    </th>
                </tr>
                <tr>
                    <th width="30%">No.of Project</th>
                    <th width="7 0%">
                        <span style="color: darkblue;"><?php echo $projectNo?></span>
                    </th>
                </tr>
            </table>
        </div>
    </div>
    <hr />
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- First Blog Post -->
            <h2>
                Projects Supervised
            </h2>
            <p class="lead">
                by Pro. <?php echo $professor['name']."  "?>
            </p>
            <p><i class="fa fa-clock-o"></i> <?php  echo " Last updated at ".date("Y/m/d");?></p>
            <hr>
            </div>
        </div>
    <?php foreach($project as $row): ?>
    <div class="alert alert-warning" role="alert">
        <div class="page-header"><a href="#"><h3><?php echo $row['proj_name']?></a>
                <button class="btn btn-success" type="button">
                    Reviews
                    <span class="badge">
                        0<?php ?>
                    </span>
                </button>
            <button class="btn btn-warning" >Write Comments</button>
            </h3></div>
        <div class="row">
            <div class="col-md-2"><h3>Description:</h3></div>
            <div class="col-md-10"><p><?php echo $row['description']?></p></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2"><h3>Complexity:</h3></div>
            <div class="col-md-10"><p><?php echo $row['complexity']?></p></div>
        </div>
    </div>
    <?php endforeach ?>
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
