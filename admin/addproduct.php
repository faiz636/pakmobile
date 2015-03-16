<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("LOCATION:login.php");
    die;
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}
elseif (file_exists($target_file))
{
    echo "<br>Sorry, file already exists. retry with different file name";
}
else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
{
//    echo "<br>The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";

    mysql_connect("Localhost", "root", "") or die("Cannot connect to mysql");
    mysql_select_db("pakmobile") or die("connect connect to pakmobile");

    $spes=$_POST['spes'];
    $des=$_POST['discription'];
    $m=$_POST['manufacture'];
    $t=$_POST['type'];
    $p=$_POST['price'];
    $n=$_POST['pname'];

    $_POST=array();

    $sql="INSERT INTO `product` (`product-id`, `img-link`, `product-name`, `price`, `type`, `manufacture`, `discription`, `spes`, `sales`) VALUES (NULL, '$target_file', '$n', '$p', '$t', '$m', '$des', '$spes', '0')";
    echo $sql;
    $result = mysql_query($sql);
    echo $result;
    if ($result)
    {
        echo "<br>data successfully entered and file uploaded";
    }
    else
    {
        echo "<br>failure,reattempt and file uploaded";
    }

}
else
{
    echo "<br>Sorry, there was an error uploading your file.";
}
?>