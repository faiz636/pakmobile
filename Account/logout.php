<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Faiz
 * Date: 11/23/2014
 * Time: 12:09 PM
 */
unset($_SESSION['uid']);
$_SESSION=array();
session_destroy();
echo "logout";
header("LOCATION:../index.php");
?>