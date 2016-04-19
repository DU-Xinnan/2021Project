<?php
/**
 * Created by PhpStorm.
 * User: Xinnan
 * Date: 3/27/2016
 * Time: 5:13 PM
 */
function checkAdmin($sql,$link){
    return fetchOne($sql, $link);
}
function checkLogined(){
    if($_SESSION['adminId']==""&&$_COOKIE['adminId']==""){
        alertMes("please first login","login.php");
    }
}

function logout(){
    $_SESSION=array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }
    if(isset($_COOKIE['adminId'])){
        setcookie("adminId","",time()-1);
    }
    if(isset($_COOKIE['adminName'])){
        setcookie("adminName","",time()-1);
    }
    session_destroy();
    header("location:login.php");
}

function addAdmin($link){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if(insert("admin",$arr,$link)){
        $mes="success!<br/><a href='addAdmin.php'>continue adding</a>|<a href='listAdmin.php'>check admin list</a>";
    }else{
        $mes="fail!<br/><a href='addAdmin.php'>re-add</a>";
    }
    return $mes;
}

/**
 * 得到所有的管理员
 * @return array
 */
function getAllAdmin($link){
    $sql="select a_id,username,email from admin ";
    $rows=fetchAll($sql,$link);
    return $rows;
}

function addUser($link){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    $arr['regTime']=time();
    if(insert("user", $arr,$link)){
        $mes="success<br/><a href='addUser.php'>";
    }else{
        $mes="fail!<br/><a href='arrUser.php'>register again</a>";
    }
    return $mes;
}

/**
alter user
 */
function editUser($id){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    if(update("imooc_user", $arr,"id={$id}")){
        $mes="success<br/>";
    }else{
        $mes="fail!<br/>";
    }
    return $mes;
}