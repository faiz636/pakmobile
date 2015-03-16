<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("LOCATION:login.php");
    die;
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>UPDATE product data</title>
    <link rel="SHORTCUT ICON" href="../images/web-logo2-icon.ico" type="image/ico" >
    <style>
        fieldset {
            width: 80%;
            margin: 20px auto;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            padding: 20px;
        }
        input,select,textarea{
            margin: 10px 0;
            /*padding: 5%;*/
        }
        legend {
            background-color: #efefef;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: left;
            text-transform: uppercase;
        }
    </style>
<!--/*  this file contains the form that will take the new data for the record*/-->
<?php

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

$id=$_GET['id'];

$sql="SELECT * FROM `product` WHERE `product-id` = $id";
$result=mysql_query($sql);
$result=mysql_fetch_array($result);

//product-id
//img-link
//product-name
//price
//type
//manufacture
//discription

?>
    <style>

    </style>


</head>
<body>

<fieldset>
    <legend>enter product data</legend>
    <form action="updatescript.php" method="post" enctype="multipart/form-data" >

        <input type="number" name="id"  value="<?php echo $result[0]; ?>" style="display: none !important;">

        <h3>Product Name : <?php echo $result[2];?> </h3>
        <label>
            Price
            <input type="number" size="18" name="price" required="" placeholder="enter price" value="<?php echo $result[3];?>">
        </label>
        <h3>Type of product : <?php echo $result[4]; ?> </h3>
        <h3>Name of manufacture : <?php echo $result[5]; ?> </h3>
        <label>
            Enter product discription<br>
            <textarea rows="4" cols="40" maxlength="1000" name="discription" placeholder="enter discription of the product"><?php echo $result[6]; ?></textarea>
        </label>
        <br>
        <label>
            Enter product specification <br>
            <textarea rows="12" cols="80" maxlength="5000" name="spes" placeholder="enter discription of the product"><?php echo $result[7]; ?></textarea>
        </label>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</fieldset>


</body>
</html>

