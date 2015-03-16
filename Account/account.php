<?php
session_start();

//if(!isset($_SESION['uid'])){
//    header("LOCATION:login_signup.php");
//    die;
//}

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

$sql="SELECT * FROM `member` WHERE `id` LIKE '$_SESSION[uid]'";

$result=mysql_query($sql);
$data=mysql_fetch_array($result);

?>
<!DOCTYPE html>
<head lang="en">
    <title>Pak Mobile - My Account</title>
    <link href="../stylesheets/general.css" type="text/css" rel="stylesheet">
    <link href="../stylesheets/dropdown.css" type="text/css" rel="stylesheet">
    <link href="account.css" type="text/css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="../images/web-logo2-icon.ico" type="image/ico" >
    <style>
        table a{
            text-decoration: none;
            color: #ffffff;
            background-color: #cccccc;
            padding: 5px;
        }
        table a:hover{
            color: darkslategray;
            background-color: #ffffff;
            font-weight: bold;
        }
        table{
            background-color: #18508f;
            padding: 2%;
            text-align: justify;
            border-spacing: 5px;
        }
        th{
            background-color: lightsteelblue;
            padding: 15px;

        }
        td {
            background-color: lightslategray;
            padding: 15px;
            color: #dcdcdc;
            /*border: 2px solid #000000;*/
        }
    </style>
</head>
<body>
<div class="page">
    <div class="top navigation navigation_top_bar">

        <span class="top_bar2 float-left">
            <ul>
                <?php
                    echo "<li class=\"top_bar_li \"><a href=\"\">".$_SESSION['una']."</a></li>
<li class=\"top_bar_li top_bar_li_border\"><a href=\"logout.php\">Logout</a></li>";
                ?>
            </ul>
        </span>
    </div>


    <nav class=" navigation navigation_nav_bar">
        <a class="float-left" href="../index.php"><img src="../images/web-logo2.png" id="pak-mobile-cell"><img src="../images/4.png" id="pak-mobile-logo"></a>
        <ul class="float-left">
            <li class="top_bar_li top_bar2_li"><a class="" href="../index.php">Home</a></li>
            <li class="top_bar_li top_bar2_li "><a class="" href="../AboutUs/about.php">About</a></li>
            <li class="top_bar_li top_bar2_li "><a class="" href="../products/product_home.php">Products</a>
                <ul class="drop_list">
                    <li class=""><a href="../products/brand_home.php?type=mobile">Mobiles</a></li>
                    <li class=""><a href="../products/brand_home.php?type=tablet">Tablets</a></li>
                </ul></li>
            <li class="top_bar_li top_bar2_li"><a href="../ContactUs/contact.php">Contact Us</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../AboutUs/about.php#faqs">FAQs</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../AboutUs/about.php#policy">Policies</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../ContactUs/contact.php">Feedbacks</a></li>
        </ul>
        <div style="clear: both"></div>
    </nav>


    <div class="main-body width-margin float-sol">

        <aside class=" float-left">
            <p class="aside_heading">Search by Brands</p>
            <ul class="">
                <li class=""><a href="../products/brand_home.php?manufacture=samsung">Samsung</a></li>
                <li class=""><a href="../products/brand_home.php?manufacture=nokia">Nokia</a></li>
                <li class=""><a href="../products/brand_home.php?manufacture=apple">Apple</a></li>
                <li class=""><a href="../products/brand_home.php?manufacture=htc">HTC</a></li>
                <li class=""><a href="../products/brand_home.php?manufacture=sony">Sony</a></li>
                <li class=""><a href="../products/brand_home.php?manufacture=huwawei">Huwawei</a></li>
                <li class=""><a href="../products/brand_home.php?manufacture=qmobile">Q Mobile</a></li>
                <li class=""><a href="../products/brand_home.php?manufacture=voice">Voice</a></li>
            </ul>
            <p class="aside_heading">Newsletters</p>
            <form action="newsletter.php">
                <label>
                    <input type="email" required="" name="email" size="18" maxlength="30" placeholder="enter your email address">
                </label>
                <input type="submit" name="submit" value="submit" class="submit">
            </form>
        </aside>

        <div class="content float-right float-sol">
            <h2 class="head">My Account</h2>
            <div class="account_details">
                <h2 class="subhead">Account Details</h2>
                <table>
                    <tr>
                        <td style="width: 300px;padding: 10px">Name</td>
                        <td style="width: 300px;padding: 10px"><?=$data['uname']?></td>
                    </tr>
                    <tr>
                        <td style="width: 300px;padding: 10px">E-Mail</td>
                        <td style="width: 300px;padding: 10px"><?=$data['e-mail']?></td>
                    </tr>
                    <tr>
                        <td  style="width: 300px;padding: 10px">Date OF Birth</td>
                        <td style="width: 300px;padding: 10px"><?=$data['dob']?></td>
                    </tr>
                    <tr>
                        <td  style="width: 300px;padding: 10px">Gender</td>
                        <td style="width: 300px;padding: 10px"><?=$data['gender']?></td>
                    </tr>

                </table>
                <h2 class="subhead">Change your Password ?</h2>
                <form method="post" action="changepass.php">
                    <?php
                    if(isset($_GET['done'])){
                        echo "operation successful<br>";
                        unset($_GET['done']);
                    }
                    elseif(isset($_GET['err'])){
                        echo "operation failed<br>";
                        unset($_GET['err']);
                    }

                    ?>
                    <label>old password :        <input type="password" name="old" placeholder="enter old password" maxlength="16"></label>
                    <br><br>
                    <label>new password :        <input type="password" name="new" placeholder="enter new password" maxlength="16"></label>
                    <br><br>
                    <label>retype new password : <input type="password" name="new2" placeholder="enter old password" maxlength="16"><br><br></label>
                    <input type="submit" name="submit" value="change" class="submit">
                </form>
                <h2 class="subhead">Your Orders</h2>
                <table>
                    <tr>
                        <th style="min-width:100px">product</th>
                        <th style="min-width:100px">order date</th>
                        <th style="min-width:100px">address</th>
                        <th style="min-width:100px">status</th>
                    </tr>
                    <?php
                    function print_article($data)
                    {
                        echo "
        <img src=\"../admin/$data[1]\" width=\"50px\" height=\"100px\">
        <h3 >$data[2]</h3>
        <h4 class=\"view_details\">
            <a href=\"products/product.php?p=$data[0]\">View Details</a>
        </h4>";
                    }


                    $sql="SELECT * FROM `order-detail` WHERE `member-id` LIKE '$_SESSION[uid]'";
                    $orders=mysql_query($sql);
                    $countorders=mysql_num_rows($orders);

                    if($countorders) {
                        $a="alternate";
                        $i=0;
                        while ($orderrow = mysql_fetch_array($orders)) {
                            echo "<tr>";
                            $m = $i % 2;
                            if($m==0){$a="alternate";}        else{$a="";}

                            $o=$orderrow['product-id'];

                            $sql="SELECT * FROM `pakmobile`.`product` WHERE `product-id` LIKE '$o'";
                            $product=mysql_query($sql);

                            $countproduct=mysql_num_rows($product);

                            if($countproduct) {
                                echo "<td>";
                                $row = mysql_fetch_array($product);
                                print_article($row);
                                echo "</td>";
//                                print_r($row);
                            }

                            echo "<td>".$orderrow['order-date']."</td>";
                            echo "<td>".$orderrow['address']."</td>";
                            echo "<td><b>".$orderrow['status']."</b></td>";
                            echo "</tr>";
                            $i++;
                        }
                    }
                    else
                    echo "no orders yet";

                    ?>
                </table>
            </div> <!--account details div end -->
        </div>

        <div class="recent_view float-sol">

        </div>
    </div>

    <footer>
        <ul class="" id="first">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../AboutUs/about.php">About</a></li>
            <li><a href="../ContactUs/contact.php">Contact</a></li>
        </ul>

        <ul class="">
            <li><a href="../AboutUs/about.php#faqs">FAQs</a></li>
            <li><a href="../AboutUs/about.php#policy">Policies</a></li>
            <li><a href="../ContactUs/contact.php">Feedback</a></li>
        </ul>

        <ul class="">
            <li class=""><a href="../products/brand_home.php?manufacture=samsung">Samsung</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=nokia">Nokia</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=apple">Apple</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=htc">HTC</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=sony">Sony</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=huwawei">Huwawei</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=qmobile">Q Mobile</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=voice">Voice</a></li>
        </ul>

        <ul class="">
            <li class=""><a class="" href="../products/product_home.php">Products</a></li>
            <li class=""><a href="../products/brand_home.php?type=mobile">Mobiles</a></li>
            <li class=""><a href="../products/brand_home.php?type=tablet">Tablets</a></li>
        </ul>
        <ul class="">
            <li><a href="https://facebook.com" target="_blank"><img src="../images/facebook-grey.png"></a></li>
            <li><a href="https://twitter.com" target="_blank"><img src="../images/twitter-gray.png"></a></li>
            <li><a href="https://plus.google.com" target="_blank"><img src="../images/google-plus-grey.png"></a></li>
        </ul>
        <div style="clear: both"></div>

    </footer>
</div>
</body>
</html>