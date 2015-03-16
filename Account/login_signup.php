<?php
session_start();
if(isset($_SESSION['uid']))
{
    header("LOCATION:account.php");
    die;
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title>Pak Mobile - Login\SignUp</title>
    <link href="../stylesheets/general.css" type="text/css" rel="stylesheet">
    <link href="../stylesheets/dropdown.css" type="text/css" rel="stylesheet">
    <link href="login_signup.css" type="text/css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="../images/web-logo2-icon.ico" type="image/ico" >

</head>
<body>
<div class="page">
    <div class="top navigation navigation_top_bar">

        <span class="top_bar2 float-left">
            <ul>
                <?php
                if(!isset($_SESSION['uid']))
                {
                    echo "<li class=\"top_bar_li\"><a href=\"login_signup.php\">Login</a></li>
<li class=\"top_bar_li top_bar_li_border\"><a href=\"login_signup.php\">Signup</a></li>";
                }
                else
                {
                    echo "<li class=\"top_bar_li \"><a href=\"account.php\">My Account</a></li>
<li class=\"top_bar_li top_bar_li_border\"><a href=\"logout.php\">Logout</a></li>";
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
            <li class="top_bar_li top_bar2_li "><a class="" href="">Products</a>
                <ul class="drop_list">
                    <li class=""><a href="#">Mobiles</a></li>
                    <li class=""><a href="#">Tablets</a></li>
                </ul></li>
            <li class="top_bar_li top_bar2_li"><a href="../ContactUs/contact.php">Contact Us</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../AboutUs/about.php#faqs">FAQs</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../AboutUs/about.php#policy">Policies</a></li>
            <li class="top_bar_li top_bar2_li"><a href="../ContactUs/contact.php">Feedbacks</a></li>
        </ul>
        <div style="clear: both"></div>
    </nav>


    <div class="main-body width-margin float-sol">


        <div class="content float-right float-sol">
            <h2 class="head">Login/SignUp</h2>

            <div id="login_div" class="float-left">
                <fieldset>
                    <legend>Login Details</legend>
                    <form action="login.php" method="post">
                        <?php
                        if(isset($_SESSION['incl'])) {
                            echo "<p style=\"background-color: orangered;color: #ffffff;\">".$_SESSION['incl']."</p>";
//                            $_SESSION['incl']=null;
                            unset($_SESSION['incl']);
                        }

                        ?>

                        <br />
                        <label>
                            Email:<br />
                            <input type="text" name="email" size="18" maxlength="30" required="required" placeholder="enter your email address" />
                        </label>
                        <br /><br /><br />
                        <label>
                            Password:<br />
                            <input type="password" name="password" size="18" maxlength="30" placeholder="enter password" />
                        </label>
                        <br /><br />
                        <input class="submit float-right" type="submit" name="login" value="login" />
                    </form>
                </fieldset>
            </div> <!-- lOGIN_DIV end-->

            <div id="signup_div" class="float-right">
                <fieldset>
                    <legend>Sign Up</legend><br />
                    <form action="signup.php" method="post" id="sign-up">
                        <?php
                        if(isset($_SESSION['incsp'])) {
                            echo "<p style=\"background-color: orangered;color: #ffffff;\">".$_SESSION['incsp']."</p>";
//                            $_SESSION['inc']=null;
                            unset($_SESSION['incsp']);
                        }
                        ?>
                        <label>Name: <br /> <input type="text" maxlength="16" width="18" name="name" placeholder="enter name"></label>
                        <br /><br />
                        <label>Gender :
                            <input type="radio" name="g" value="M" checked>Male
                            <input type="radio" name="g" value="F">Female
                        </label>
                        <br /><br />
                        <label>Date Of Birth: <br /> <input type="date" width="18" name="dob"></label>
                        <br /><br />
                        <label>Email Address:<br /> <input type="email" maxlength="30" width="18" name="mail" placeholder="enter email address"></label>
                        <br /><br />
                        <label>Password: <br /> <input type="password" required="" maxlength="30" width="18" name="password1" placeholder="enter password"></label>
                        <br /><br />
                        <label>Re-type Password: <br /> <input type="password" required="" maxlength="30" width="18" name="password2" placeholder="retype password"></label>
                        <br /><br />
                        <label>Contact number: <br /> <input type="tel" width="18" name="phnum" placeholder="enter phone number"></label>
                        <br /><br />
                        <input class="submit float-right" type="submit" name="submit" value="submit">
                    </form>
                </fieldset>
            </div> <!-- SIGNUP_DIV end-->
        </div> <!--content div end-->

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
            <li class=""><a href="../products/brand_home.php?manufacture=samsung">Samsung</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=nokia">Nokia</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=apple">Apple</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=htc">HTC</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=sony">Sony</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=huwawei">Huwawei</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=qmobile">Q Mobile</a></li>
            <li class=""><a href="../products/brand_home.php?manufacture=voice">Voice</a></li>
        </ul>

        <ul class="float-left">
            <li class=""><a class="" href="../products/product_home.php">Products</a></li>
            <li class=""><a href="../products/brand_home.php?type=mobile">Mobiles</a></li>
            <li class=""><a href="../products/brand_home.php?type=tablet">Tablets</a></li>
        </ul>

        <ul class="float-left">
            <li><a href="https://facebook.com" target="_blank"><img src="../images/facebook-grey.png"></a></li>
            <li><a href="https://twitter.com" target="_blank"><img src="../images/twitter-gray.png"></a></li>
            <li><a href="https://plus.google.com" target="_blank"><img src="../images/google-plus-grey.png"></a></li>
        </ul>
        <div style="clear: both"></div>

    </footer>
</div>
</body>
</html>