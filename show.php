<?php
include_once 'header.php';
require_once 'include.php';

$pid = $_GET['pid'];
$projid = $_GET['projid'];

echo "Here shows the following project:\n";

$query = "SELECT DISTINCT proj_name FROM project WHERE p_id='$pid' and proj_id='$projid'";
$result = mysqli_query($link,$query);
$result = mysqli_fetch_assoc($result);
$result = implode("",$result);
echo "<p style=\"margin-top: 150px\">$result</p>";

include_once 'footer.php';
?>