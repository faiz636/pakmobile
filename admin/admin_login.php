<?php

session_start();

$admin=$_POST['admin'];
$pwd=$_POST['password'];

if(strcmp($admin,"admin")==0 and strcmp($pwd,"pass123")==0) {

    $_SESSION['admin'] = $admin;
    header("LOCATION:main.php");
}
else
{
    $_SESSION['err']="incorrect userid or password";
    header("LOCATION:login.php");
}
?>
