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
    <title>Feedback display</title>
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
            background-color: #ffffff;
            font-weight: bold;
        }
        table{
            background-color: #cccccc;
            padding: 2%;
            text-align: justify;
            border-spacing: 5px;
        }
        th{
            background-color: lightslategray;
            padding: 15px;

        }
        td {
            background-color: dimgray;
            padding: 15px;
            color: #dcdcdc;
            /*border: 2px solid #000000;*/
        }
    </style>
    <?php

    function print_record($data)
    {
        echo "<tr>
        <td><a href=\"deletefeedback.php?id=$data[0]\">DELETE</a></td>
        <td>$data[1]</td>
        <td>$data[2]</td>
    </tr>";
    }


    function print_data($result)
    {
        $count=mysql_num_rows($result);

        if($count){
            while($row=mysql_fetch_array($result)){
                print_record($row);
            }
        }
    }
    ?>


    <?php
    mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
    mysql_select_db("pakmobile") or die("connect connect to pakmobile");

    $sql="SELECT * FROM `feedback`";
    $result=mysql_query($sql);
    ?>
</head>
<body>
<a href="main.php">MAIN</a>
<br><br>
<table>
    <thead>
    <tr>
        <th>sender e-mail address</th>
        <th>message</th>
        <th>delete feedback?</th>
    </tr>
    </thead>
    <tbody>
    <?php print_data($result); ?>
    </tbody>
</table>


</body>
</html>