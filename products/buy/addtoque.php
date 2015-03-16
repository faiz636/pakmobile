<?php
session_start();
if(!(isset($_SESSION['uid'])and isset($_SESSION['buy'])))
{
    header("LOCATION:../../index.php");
    die;
}

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

$user=$_SESSION['uid'];   //id of the buyer in the data base
$product=$_SESSION['buy'];    //id of the product in the data base
$address=$_POST['add']; //address provided in the form
$today = date('Y-m-d'); //date of today

echo $today."<br>";
$sql="INSERT INTO `order-detail`(`order-number`, `product-id`, `member-id`, `order-date`, `address`, `status`)
VALUES (NULL,'$product','$user','$today','$address','pending')";

$result=mysql_query($sql);

if($result)
{
    echo "done";
    unset($_SESSION['buy']);



    $sql="SELECT * FROM `product` WHERE `product-id` LIKE '$product'";
    $result=mysql_query($sql);
    $result=mysql_fetch_array($result);
//    echo $result[8];
    $sale=1+ $result[8];
//    echo $sale;
    $sql="UPDATE `pakmobile`.`product` SET `sales` = $sale WHERE `product`.`product-id` = '$result[0]'";
    $result=mysql_query($sql);


//    $sql="UPDATE `pakmobile`.`product` SET `sales` = '5' WHERE `product`.`product-id` = 37;";
    header("location:../../index.php");
}

else
{
    echo "operation failed";
//    header    ("location:../index.php");
}

?>