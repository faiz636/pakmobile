<?php

session_start();

$email=$_POST['email'];
$pwd=$_POST['password'];

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

$sql="SELECT * FROM `member` WHERE `e-mail` LIKE '$email'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);

//print_r($data);
//$result=mysql_fetch_array($result);

//$count=mysql_num_rows($result);
//echo $count;

if(strcmp($data['e-mail'],$email)==0)
{
//    $sql="SELECT * FROM `member` WHERE `e-mail` LIKE '$email' AND `pwd` LIKE '$pwd'";
//    $result=mysql_query($sql);
//    if(strcmp($pwd,$data['pwd'])==0)
    if(strcmp($pwd,$data[3])==0)
    {
//        echo"you may enter";

        $result=mysql_fetch_array($result);
        $_SESSION['uid']=$data[1];
        $_SESSION['una']=$data[2];
        if(isset($_SESSION['buy']))
        {

//            echo "";
            echo "you may enter and buy";
            header("LOCATION:../products/buy/payment.php");
        }
        else
        {
            header("LOCATION:../index.php");
//            echo "index";
            die;
        }

    }
    else
    {
        header("LOCATION:login_signup.php");
        $_SESSION['incl']="incorrect password";
//        echo "incorrect password";
        die;
//        echo "incorrect password";
    }
}
else
{
//    echo "incorrect/unregistered email address";
    header("LOCATION:login_signup.php");
    $_SESSION['incl']="incorrect/unregistered email address";
    die;

}

?>
