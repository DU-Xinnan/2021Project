<?php
require_once 'include.php';
$mes="";
$act=$_REQUEST['act'];
if($act==="reg"){
    $mes=reg($link);
}elseif($act==="login"){
    $mes=login($link);
}elseif($act==="userOut"){
    userOut();
}
include_once "header.php";?>
<div class="row row-content" style="position:relative;top:20px;bottom:20px;min-height: 600px;">
    <?php
        if($mes)
            echo $mes;
        else
            echo "fail!";
    ?>
   
</div>
<?php
include_once  "footer.php";
?>