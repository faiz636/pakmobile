<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("LOCATION:login.php");
    die;
}
// this file contain the script that will update the record

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

//$id=$_POST[id];
//$price=$_POST[price];
$sql="UPDATE `product` SET `price`=$_POST[price],`discription`='$_POST[discription]',`spes`='$_POST[spes]' WHERE `product-id` = $_POST[id]";
$result=mysql_query($sql);

if($result)
{
    echo "record updated";
}
else
{
    echo "operation failed";
}
?>