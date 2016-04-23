<?php
/**
 * Created by PhpStorm.
 * User: Xinnan
 * Date: 3/27/2016
 * Time: 3:51 PM
 */
function connect(){
    $link = new mysqli("localhost","root","","2021project");
    if(mysqli_connect_error()){
        echo "Connection fail";
        exit();
    }
    mysqli_set_charset($link,DB_CHARSET);
    mysqli_select_db($link,DB_NAME) or die("open database fail");
    return $link;
}
//insert operation
function insert($table,$array,$link){
    $keys=join(",",array_keys($array));
    $vals="'".join("','",array_values($array))."'";
    $sql="insert into {$table}($keys) values({$vals})";
    //echo $sql;
    mysqli_query($link,$sql);
    return mysqli_insert_id($link);
}

function update($table,$array,$where=null,$link){
    $str="";
    foreach($array as $key=>$val){
        if($str==null){
            $sep="";
        }else{
            $sep=",";
        }
        $str.=$sep.$key."='".$val."'";
    }
    $sql="update {$table} set {$str} ".($where==null?null:" where ".$where);
    $result=mysqli_query($link,$sql);
    //var_dump($result);
    //var_dump(mysql_affected_rows());exit;
    if($result){
        return mysqli_affected_rows($link);
    }else{
        return false;
    }
}

function delete($table,$where=null,$link){
    $where=$where==null?null:" where ".$where;
    $sql="delete from {$table} {$where}";
    mysqli_query($link,$sql);
    return mysqli_affected_rows($link);
}

function fetchOne($sql,$link){
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
}

function fetchAll($sql,$link){
    $rows=[];
    $result=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function gettop($link){
    $sql="select * from professor order by star desc LIMIT 6";
    $result=fetchAll($sql, $link);
    return $result;
}