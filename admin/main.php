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
    <title>MAIN</title>
    <link rel="SHORTCUT ICON" href="../images/web-logo2-icon.ico" type="image/ico" >
    <style>
        .page a{
            text-decoration: none;
            color: #ffffff;
        }
        .page{
            width: 50%;
            margin: auto;
            margin-top: 5%;
            border-width: 5px;
            background-color: gainsboro;
        }
        p{
            padding: 2%;
            text-align: center;
            background-color: #aaaaaa;
            display: inline-block;
            width: 30%;
            margin: 7%;
        }
        p:hover{
            background-color: #cccccc;
        }
    </style>
</head>
<body>
<div class="page">
<p>
<a href="displayall.php">list all products</a>
</p><p>
<a href="updatedeleteselection.php">update delete product</a>
</p><p>
<a href="addproductform.php">add product</a>
</p><p>
<a href="displayorder.php">display orders</a>
</p><p>
<a href="displayfeedbacks.php">display feedbacks</a>
</p><p>
<a href="logout.php">logout</a>
</p>
</div>

</body>
</html>

