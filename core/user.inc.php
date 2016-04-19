<?php
/**
 * @param $link
 * @return string
 */
function reg($link){
    $arr=$_POST;
    $arr['regTime']=time();
//	print_r($arr);exit;
    if(insert("user", $arr,$link)){
        $mes="<div class=\"for_for\">
			<div class=\"container\">
				<h3>Success!</h3>
				<p>click the button below to go back</p>
				<button type=\"button\" class=\"btn btn-info\"><a href=\"index.php\">Go back</a></button>
			</div>
		</div>";
    }else{
        $mes="<p>fail!</p><br/><a href='../register.php'>register again</a>|<a href='index.php'>return to index</a>";
    }
    return $mes;
}
function login($link){
    $username=$_POST['username'];
    $passward=$_POST['password'];
    $sql="select * from user where username='$username' and password='{$passward}'";
    $row=fetchOne($sql,$link);
    if($row){
        $_SESSION['loginFlag']=$row['u_id'];
        $_SESSION['username']=$row['username'];
        $mes="<div class=\"for_for\">
			<div class=\"container\">
				<h3>Logined!</h3>
				<p>click the button below to go back</p>
				<button type=\"button\" class=\"btn btn-info\"><a href=\"index.php\">Go back</a></button>
			</div>
		</div>";
    }else{
        $mes="fail!<br/><a href='index.php'>login again</a>|<a href='index.php'>return to index</a>";
    }
    return $mes;
}

function userOut(){
    $_SESSION=array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }
    session_destroy();
    header("location:../2021project/register.php");
}


