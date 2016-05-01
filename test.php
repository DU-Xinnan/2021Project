<?php
/**
 * Created by PhpStorm.
 * User: Xinnan
 * Date: 5/1/2016
 * Time: 4:58 PM
 */
$username='xduac';
$password='770273644dxn';
$encUser = urlencode($username);
$encPass = urlencode($password);
$handle = @fopen("http://{$encUser}:{$encPass}@urop.ust.hk/cgi-bin/uropos/student/index.php?action=details&id=709", "rt");
$file=array();
$count=0;
while(!feof($handle)){
    $line=fgets($handle);
    $file[$count]=$line;
}
var_dump($file);