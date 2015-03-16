<?php
session_start();
if(!(isset($_SESSION['uid'])and isset($_SESSION['buy'])))
{
    header("LOCATION:../../index.php");
    die;
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        fieldset{
            border: 2px solid darkslategrey;
            width: 40%;
            margin: 10% auto;
        }
        body{
            text-align: justify;
            font-size: 28px;
        }
        textarea{
            color: #ffffff;
            background-color: lightgray;
            border-radius: 5px;
            color: #efefef;
            margin: 5px;
        }
        .submit{
            font-size: 16px;
            color: #ffffff;
            padding: 5px;
            margin: 10px 50px 10px 10px;
            background-color: lightgrey;
            border-radius: 5px;
        }
        .submit:hover{
            background-color: #999999;
        }
    </style>

</head>
<body>
<fieldset>
    <legend>purchase detail</legend>
    <form method="post" action="addtoque.php">
        payment:  XXXXXXXX<br>
        shipping address:<br>
        <textarea rows="3" cols="40" maxlength=200" name="add" placeholder="enter shipping address"></textarea><br>
        <input class="submit" type="submit" name="submit" value="submit">
    </form>
</fieldset>
</body>
</html>