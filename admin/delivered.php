<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("LOCATION:login.php");
    die;
}

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

//print_r($_GET);
$order=$_GET['ord'];
//echo $order;

$sql="UPDATE `pakmobile`.`order-detail` SET `status` = 'delivered' WHERE `order-detail`.`order-number` = $order";

//echo $sql;
$result=mysql_query($sql);

if($result)
{
    echo "done";
    header("location:displayorder.php");
}

else
{
    echo "operation failed";
}

?>
