<?php
session_start();

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

$p=$_GET['p'];

$sql="SELECT * FROM `product` WHERE  `product-id` LIKE '$p'";

$result=mysql_query($sql);
$result=mysql_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title>Pak Mobile - product</title>
    <link href="../stylesheets/general.css" type="text/css" rel="stylesheet">
    <link href="../stylesheets/dropdown.css" type="text/css" rel="stylesheet">
    <link href="images/product.css" type="text/css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="../images/web-logo2-icon.ico" type="image/ico" >

</head>
<body>
<div class="page">
    <div class="top navigation navigation_top_bar">

        <span class="top_bar2 float-left">
            <ul>
                <?php
                if(isset($_SESSION['uid']))
                {
                    echo "<li class=\"top_bar_li \"><a href=\".../Account/account.php\">".$_SESSION['una']."</a></li>
<li class=\"top_bar_li top_bar_li_border\"><a href=\"../Account/logout.php\">Logout</a></li>";

                }
                else
                {
                    echo "<li class=\"top_bar_li\"><a href=\"../Account/login_signup.php\">Login</a></li>
<li class=\"top_bar_li top_bar_li_border\"><a href=\"../Account/login_signup.php\">Signup</a></li>";
                }
                ?>
            </ul>
        </span>
    </div>


    <nav class=" navigation navigation_nav_bar">
        <a class="float-left" href="../index.php"><img src="../images/web-logo2.png" id="pak-mobile-cell">
            <img src="../images/4.png" id="pak-mobile-logo"></a>
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
            <p class="aside_heading" id="top">Search by Brands</p>
            <ul class="">
                <li class=""><a href="brand_home.php?manufacture=samsung">Samsung</a></li>
                <li class=""><a href="brand_home.php?manufacture=nokia">Nokia</a></li>
                <li class=""><a href="brand_home.php?manufacture=apple">Apple</a></li>
                <li class=""><a href="brand_home.php?manufacture=htc">HTC</a></li>
                <li class=""><a href="brand_home.php?manufacture=sony">Sony</a></li>
                <li class=""><a href="brand_home.php?manufacture=huwawei">Huwawei</a></li>
                <li class=""><a href="brand_home.php?manufacture=qmobile">Q Mobile</a></li>
                <li class=""><a href="brand_home.php?manufacture=voice">Voice</a></li>
            </ul>
            <p class="aside_heading">Newsletters</p>
            <form action="Account/newsletter.php" method="post">
                <label>
                    <input type="email" required="" name="email" size="18" maxlength="30" placeholder="enter your email address">
                </label>
                <input type="submit" name="submitnews" value="submit" class="submit">
            </form>

        </aside>

        <div class="content float-right float-sol">
            <h2 class="head"><?=$result['product-name']?></h2>
            <div class="product_div">
                <img src="../admin/<?=$result['img-link']?>" class="float-left product_img">
                <h3 style="color: #18508f">Whats New !</h3>
                <p class="descrip"><?=$result['discription']?></p>
                <h2>Price: Rs.<?=$result['price']?></h2>
                <br />
                <a class="buy" href="buy/buy.php?id=<?=$result['product-id']?>">Buy This Product</a>
            </div>
            <table class="">
                <tbody>
                <tr class="alternate2"> <!-- This alternate is located in general.css -->
                    <th colspan="2">Specifications</th>
                </tr>
                <?=$result['spes']?>
                </tbody>
            </table>
            <a href="#top" id="bookmark">Top</a>
        </div>

        <div class="recent_view float-sol">

        </div>
    </div>

    <footer>
        <ul class="float-left" id="first">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../AboutUs/about.php">About</a></li>
            <li><a href="../ContactUs/contact.php">Contact</a></li>
        </ul>

        <ul class="float-left">
            <li><a href="../AboutUs/about.php">FAQs</a></li>
            <li><a href="../AboutUs/about.php">Policies</a></li>
            <li><a href="../ContactUs/contact.php">Feedback</a></li>
        </ul>

        <ul class="float-left">
            <li class=""><a href="brand_home.php?manufacture=samsung">Samsung</a></li>
            <li class=""><a href="brand_home.php?manufacture=nokia">Nokia</a></li>
            <li class=""><a href="brand_home.php?manufacture=htc">HTC</a></li>
            <li class=""><a href="brand_home.php?manufacture=sony">Sony</a></li>
            <li class=""><a href="brand_home.php?manufacture=huwawei">Huwawei</a></li>
            <li class=""><a href="brand_home.php?manufacture=qmobile">Q Mobile</a></li>
            <li class=""><a href="brand_home.php?manufacture=voice">Voice</a></li>
        </ul>

        <ul class="float-left">
            <li class=""><a class="" href="../products/product_home.php">Products</a>
            <li class=""><a href="../products/product_home.php?type=mobile">Mobiles</a></li>
            <li class=""><a href="../products/product_home.php?type=tablet">Tablets</a></li>
        </ul>

        <ul class="float-left">
            <li><a><img src="../images/facebook-grey.png"></a></li>
            <li><a><img src="../images/twitter-gray.png"></a></li>
            <li><a><img src="../images/google-plus-grey.png"></a></li>
        </ul>
        <div style="clear: both"></div>

    </footer>
</div>
</body>
</html>