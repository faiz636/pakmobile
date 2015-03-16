<?php
session_start();
$p=$_POST['old'];
$p1=$_POST['new'];
$p2=$_POST['new2'];
if(strcmp($p1,$p2)==0){
    mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
    mysql_select_db("pakmobile") or die("connect connect to pakmobile");

    $id=$_SESSION['uid'];

    $sql="SELECT * FROM `member` WHERE `id` LIKE '$id'";
    $result=mysql_query($sql);

    $data=mysql_fetch_array($result);

    if(strcmp($data[3],$p)==0){

        $sql="UPDATE `member` SET `pwd` = '$p1' WHERE `member`.`id` = $id";
        $result=mysql_query($sql);

        if($result){
            echo "operation successful";
            header("LOCATION:account.php?done=1");
        }
        else{
            echo "operation failed";
            header("LOCATION:account.php?err=1");
        }
    }
    else{
        echo "incorrect password";
        }
}
else{
    echo "password miss match in retype password";
}
?>