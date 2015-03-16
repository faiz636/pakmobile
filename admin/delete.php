<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("LOCATION:login.php");
    die;
}
//delete record from database and delete file from server
mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

$id=$_GET['id'];

$sql="SELECT * FROM `product` WHERE `product-id` LIKE $id";
$result=mysql_query($sql);

$result=mysql_fetch_array($result);

$sql="DELETE FROM `pakmobile`.`product` WHERE `product`.`product-id`=$id";
$result=mysql_query($sql);

echo $result;

if($result){
    unlink($result[1]);
    echo "record deleted";
}
else{
    echo "operation failed";
}

?>