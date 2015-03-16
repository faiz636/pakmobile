<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("LOCATION:login.php");
    die;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Add Product </title>
    <link rel="SHORTCUT ICON" href="../images/web-logo2-icon.ico" type="image/ico" >
    <style>
        a{
            text-decoration: none;
            color: #ffffff;
            background-color: #cccccc;
            padding: 5px;
        }
        a:hover{
            color: darkslategray;
            background-color: #dcdcdc;
            font-weight: bold;
        }
        fieldset {
            width: 80%;
            margin: auto;
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
</head>

<body>
<a href="main.php">MAIN</a>
<br><br>
<fieldset>
    <legend>enter product data</legend>
    <form action="addproduct.php" method="post" enctype="multipart/form-data" >
        <label>
            Product Name
            <input type="text" maxlength="80" size="38" name="pname" required="required" placeholder="enter product name">
        </label>
        <br>
        <label>
            Price
            <input type="number" size="18" name="price" required="" placeholder="enter price">
        </label>
        <br>
        <label>
            Type of product
            <select name="type">
                <option value="mobile">Mobile</option>
                <option value="tablet">Tablet</option>
            </select>
        </label>
        <br>
        <label>
            Name of manufacture
            <select name="manufacture">
                <option value="nokia">Nokia</option>
                <option value="apple">Apple</option>
                <option value="qmobile">Q-Mobile</option>
                <option value="samsung">Sumsung</option>
                <option value="htc">HTC</option>
                <option value="sony">sony</option>
                <option value="voice">Voice</option>
                <option value="huwawei">Huwawei</option>
            </select>
        </label>
        <br>
        <label>
            Enter product discription<br>
            <textarea rows="4" cols="40" maxlength="1000" name="discription" required="required" placeholder="enter discription of the product"></textarea>
        </label>
        <br><label>
            Enter product specification table<br>
            <textarea rows="15" cols="80" maxlength="5000" name="spes" required="required" placeholder="enter specificattion of the product"></textarea>
        </label>
        <br>
        <label>
            Upload image file for the product<br>
            <input type="file" name="fileToUpload" id="fileToUpload" size="18" required="required">
        </label>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</fieldset>


</body>
</html>