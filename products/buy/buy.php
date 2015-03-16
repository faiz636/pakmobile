<?php
/**
 * Created by PhpStorm.
 * User: Faiz
 * Date: 11/24/2014
 * Time: 7:37 PM
 */
session_start();

$_SESSION['buy']=$_GET['id'];

echo $_SESSION['buy'];
if(isset($_SESSION['uid']))
{
    header("LOCATION:payment.php");
}
else
{
    header("LOCATION:../../Account/login_signup.php");
}

?>