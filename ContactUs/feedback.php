<?php

session_start();

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

$email=$_POST['email'];
$feedback=$_POST['feedback'];

$sql="INSERT INTO `feedback`(`email`, `message`) VALUES ('$email','$feedback')";
$result=mysql_query($sql);
if($result)
{
//    echo "done";
    header("LOCATION:../index.php");
}
else
{
    echo "error in operation";
}



?>