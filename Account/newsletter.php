<?php
if(!isset($_POST["submitnews"]))
{
    header("LOCATION:../index.php");
    die;
}
$email=$_POST['email'];

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

$sql="INSERT INTO `newsletter`(`num`, `email`) VALUES (NULL,'$email')";

$result=mysql_query($sql);

if($result)
{
    echo "done";
    header("LOCATION:../index.php");
    die;
//    echo $result;
//    echo "update successful";
}
else
{
//    echo $result;
    echo "error, update unsuccessful";
}
?>

