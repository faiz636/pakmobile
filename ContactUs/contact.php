<?php

session_start();

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <title>Pak Mobile - ContactUs</title>
    <link href="../stylesheets/general.css" type="text/css" rel="stylesheet">
    <link href="../stylesheets/dropdown.css" type="text/css" rel="stylesheet">
    <link href="contact.css" type="text/css" rel="stylesheet">
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
//                    echo "<li class=\"top_bar_li \"><a href=\"Account/account.php\">My Account</a></li>
//<li class=\"top_bar_li top_bar_li_border\"><a href=\"Account/logout.php\">Logout</a></li>";
                    echo "<li class=\"top_bar_li \"><a href=\"../Account/account.php\">".$_SESSION['una']."</a></li>
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
            <li class="top_bar_li top_bar2_li"><a href="">Contact Us</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../AboutUs/about.php#faqs">FAQs</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../AboutUs/about.php#policy">Policies</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../ContactUs/contact.php">Feedbacks</a></li>
        </ul>
        <div style="clear: both"></div>    </nav>


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
            <form action="../Account/newsletter.php" method="post">
                <label>
                    <input type="email" required="" name="email" size="18" maxlength="30" placeholder="enter your email address">
                </label>
                <input type="submit" name="submitnews" value="submit" class="submit">
            </form>

        </aside>

        <div class="content float-right float-sol">
            <h2 class="head">Contact Us </h2>
            <div class="contact_details">
                <h2 class="subhead">How would you Contact Us ?</h2>
                <address>
                    <b>E-mail Us at: </b>pakmobile@hotmail.com<br />
                    <b>Dial Us by: </b>111-123-789<br />
                </address>
                <h2 class="subhead">We would like to hear from you.</h2>
                <form action="feedback.php" method="post">
                    <input type="email" required="" name="email" size="18" maxlength="30" placeholder="enter your email address"><br /><br />
                    <textarea placeholder="write your feedback and suggestions to us" maxlength="1000" cols="100" rows="20" name="feedback"></textarea><br />
                    <input type="submit" name="submit" value="sumbit" class="submit">
                </form>

                <?php
                //TODO: build whole feedback table and script and connect it with form
                ?>
            </div> <!--contact details div end -->
        </div>

        <div class="recent_view float-sol">

        </div>
    </div>

    <footer>
        <ul class="" id="first">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../AboutUs/about.php">About</a></li>
            <li><a href="">Contact</a></li>
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