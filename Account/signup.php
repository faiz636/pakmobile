<?php
session_start();

$email=$_POST['mail'];
$pwd=$_POST['password1'];
$pwd2=$_POST['password2'];
$uname=$_POST['name'];
$gender=$_POST['g'];
$phnum=$_POST['phnum'];
$dob=$_POST['dob'];



if(strcmp($pwd,$pwd2)==0)
{
    mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
    mysql_select_db("pakmobile") or die("connect connect to pakmobile");

    $sql="INSERT INTO `member`(`id`, `uname`, `pwd`, `e-mail`, `dob`, `gender`) VALUES (NULL ,'$uname','$pwd','$email','$dob','$gender')" ;
    $result=mysql_query($sql);

    if($result)
    {

        echo $result;
//        echo "signup successful";

        $sql="SELECT * FROM `member` WHERE `e-mail` LIKE '$email'";

        $result=mysql_query($sql);
        $result=mysql_fetch_array($result);

        $_SESSION['uid']=$result[1];
        $_SESSION['una']=$result[2];
        if(isset($_SESSION['buy']))
        {
            echo "you may enter and buy";
            header("LOCATION:../products/buy/payment.php");
            die;
        }
        else
        {
            header("LOCATION:../index.php");
            die;
        }
    }
    else
    {
//        echo $result;
//     echo "signup unsuccessful";
        $_SESSION['incsp']="signup unsuccessful";
        header("LOCATION:login_signup.php");
        die;
    }
}
else
{
    $_SESSION['incsp']="password miss  match";
    header("LOCATION:login_signup.php");
    die;
//echo "password miss  match";
}
?>
