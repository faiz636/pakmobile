<?php session_start();?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title>Pak Mobile -Products</title>
    <link href="../stylesheets/general.css" type="text/css" rel="stylesheet">
    <link href="../stylesheets/dropdown.css" type="text/css" rel="stylesheet">
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

    <!--<header class="navigation navigation_header">-->
    <!--<a class=""><img src="web-logo4.png" id="pak-mobile-logo"></a>-->
    <!--</header>-->

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
            <p class="aside_heading">Search by Brands</p>
            <ul class="">
                <li class=""><a href="brand_home.php?manufacture=samsung">Samsung</a></li>
                <li class=""><a href="brand_home.php?manufacture=nokia">Nokia</a></li>
                <li class=""><a href="brand_home.php?manufacture=apple">Apple</a></li>
                <li class=""><a href="brand_home.php?manufacture=htc">HTC</a></li>
                <li class=""><a href="brand_home.php?manufacture=sony">Sony</a></li>
                <li class=""><a href="brand_home.php?manufacture=huwawei">Huwawei</a></li>
                <li class=""><a href="brand_home.php?manufacture=qmobile">Q Mobile</a></li>
                <li class=""><a href="brand_home.php?manufacture=voice">Voice</a></li>
                <p class="aside_heading">Newsletters</p>
                <form action="../Account/newsletter.php" method="post">
                    <label>
                        <input type="email" required="" name="email" size="18" maxlength="30" placeholder="enter your email address">
                    </label>
                    <input type="submit" name="submitnews" value="submit" class="submit">
                </form>

            </ul>
        </aside>

        <div class="content float-right float-sol">

            <div class="float-sol">
                <h2 class="head">Mobile Brands</h2>
                <a href="brand_home.php?manufacture=samsung"><article class="">
                        <img src="images/samsung.jpg">

                        <h3 class="item_name">Samsung</h3>
                    </article></a>
                <a href="brand_home.php?manufacture=nokia"><article class="alternate2">
                        <img src="images/nokia.png">

                        <h3 class="item_name">Nokia</h3>
                    </article></a>
                <a href="brand_home.php?manufacture=sony"><article class="">
                        <img src="images/sony.png">

                        <h3 class="item_name">Sony</h3>
                    </article></a>
                <a href="brand_home.php?manufacture=apple"><article class="alternate2">
                        <img src="images/Apple.png">

                        <h3 class="item_name">Apple iPhone</h3>
                    </article></a>
                <a href="brand_home.php?manufacture=htc"><article class="">
                        <img src="images/htc.png">

                        <h3 class="item_name">HTC</h3>
                    </article></a>
                <a href="brand_home.php?manufacture=qmobile"><article class="alternate2">
                        <img src="images/qmobile.jpg">

                        <h3 class="item_name">QMobile</h3>
                    </article></a>
            </div>
        </div>

        <div class="recent_view float-sol">

        </div>
    </div>

    <footer class="float-sol">

        <ul class="float-left" id="first">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../AboutUs/about.php">About</a></li>
            <li><a href="../ContactUs/contact.php">Contact</a></li>
        </ul>

        <ul class="float-left">
            <li><a href="../AboutUs/about.php#faqs">FAQs</a></li>
            <li><a href="../AboutUs/about.php#policy">Policies</a></li>
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
            <li><a href="https://www.facebook.com" target="_blank"><img src="../images/facebook-grey.png"></a></li>
            <li><a href="https://twitter.com" target="_blank"><img src="../images/twitter-gray.png"></a></li>
            <li><a href="https://plus.google.com" target="_blank"><img src="../images/google-plus-grey.png"></a></li>
        </ul>
        <div style="clear: both"></div>

    </footer>
</div>
</body>
</html>