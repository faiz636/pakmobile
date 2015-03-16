<?php

session_start();

mysql_connect("Localhost","root","") or die("Cannot connect to mysql");
mysql_select_db("pakmobile") or die("connect connect to pakmobile");

//function to print all articles

//product-id
//img-link
//product-name
//price
//type
//manufacture
//discription
//spes
//sales
function print_article($data,$m)
{
    $a="alternate";
    if($m==0){$a="alternate";}
    else{$a="";}
    echo "<article class=\"$a\">
        <img src=\"../admin/$data[1]\">
        <h3 class=\"item_name\">$data[2]</h3>
        <h4 class=\"price\">$data[3]</h4>
        <h4 class=\"view_details\">
            <a href=\"product.php?p=$data[0]\">View Details</a>
        </h4>
    </article>";
}
function print_data($result)
{
    $count=mysql_num_rows($result);

    if($count){
        $i=0;
        while($row=mysql_fetch_array($result)){
            if($i>=6){break;}
            $m=$i%2;
            print_article($row,$m);
            $i=$i+1;
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title>Pak Mobile - Brand</title>
    <link href="../stylesheets/styles.css" type="text/css" rel="stylesheet">
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

            <div class="float-sol">
                <h3 class="head"><?php
                    if(isset($_GET['manufacture'])) {

                        $m = $_GET['manufacture'];
                        switch ($m) {
                            case "huwawei":
                                echo "HUWAWEI";
                                break;
                            case "voice":
                                echo "VIOCE";
                                break;
                            case "apple":
                                echo "APPLE";
                                break;
                            case "samsung":
                                echo "SAMSUNG";
                                break;
                            case "qmobile":
                                echo "Q-MOBILE";
                                break;
                            case "nokia":
                                echo "NOKIA";
                                break;
                            case "sony":
                                echo "SONY";
                                break;
                            case "htc":
                                echo "HTC";
                                break;
                        }
                        $sql="SELECT * FROM `product` WHERE  `manufacture` LIKE '$m' ORDER BY `product`.`product-id` DESC " ;
                    }
                    else if(isset($_GET['type'])){
                        $m = $_GET['type'];
                        switch ($m) {
                            case "huwawei":
                                echo "HUWAWEI";
                                break;
                            case "voice":
                                echo "VIOCE";
                                break;
                            case "apple":
                                echo "APPLE";
                                break;
                            case "samsung":
                                echo "SAMSUNG";
                                break;
                            case "qmobile":
                                echo "Q-MOBILE";
                                break;
                            case "nokia":
                                echo "NOKIA";
                                break;
                            case "sony":
                                echo "SONY";
                                break;
                            case "htc":
                                echo "HTC";
                                break;
                        }
                        $sql="SELECT * FROM `product` WHERE  `type` LIKE '$m' ORDER BY `product`.`product-id` DESC " ;
                    }

                    ?></h3>
                <?php

                $result=mysql_query($sql);
                print_data($result);

                ?>

            </div>


        </div>

        <div class="recent_view float-sol">

        </div>
    </div>

    <footer class="">

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
            <li><a href="https://www.facebook.com" target="_blank"><img src="../images/facebook-grey.png"></a></li>
            <li><a href="https://twitter.com" target="_blank"><img src="../images/twitter-gray.png"></a></li>
            <li><a href="https://plus.google.com" target="_blank"><img src="../images/google-plus-grey.png"></a></li>
        </ul>
        <div style="clear: both"></div>

    </footer>
</div>
</body>
</html>