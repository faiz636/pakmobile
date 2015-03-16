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
    <title>Display all products</title>
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
        table{
            background-color: #cccccc;
            padding: 2%;
            text-align: center;
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
//display all records in a table


//product-id
//img-link
//product-name
//price
//type
//manufacture
//discription

function print_record($data)
{
    echo "<tr>
        <td>$data[0]</td>
        <td>$data[1]</td>
        <td>$data[2]</td>
        <td>$data[3]</td>
        <td>$data[4]</td>
        <td>$data[5]</td>
        <td>$data[6]</td>
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

$sql="SELECT * FROM `product`" ;
$result=mysql_query($sql);
?>
</head>
<body>
<a href="main.php">MAIN</a>
<br><br>
<table>
    <thead>
    <tr>
        <th>product-id</th>
        <th>img-link</th>
        <th>product-name</th>
        <th>price</th>
        <th>type</th>
        <th>manufacture</th>
        <th>discription</th>
    </tr>
    </thead>
    <tbody>
    <?php print_data($result); ?>
    </tbody>
</table>


</body>
</html>