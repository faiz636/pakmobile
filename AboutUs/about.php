<!DOCTYPE html>
<html>
<head lang="en">
    <title>Pak Mobile - about</title>
    <link href="../stylesheets/general.css" type="text/css" rel="stylesheet">
    <link href="../stylesheets/dropdown.css" type="text/css" rel="stylesheet">
    <link href="about.css" type="text/css" rel="stylesheet">
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
    <a class="float-left" href="../index.php"><img src="../images/web-logo2.png" id="pak-mobile-cell"><img src="../images/4.png" id="pak-mobile-logo"></a>
    <ul class="float-left">
        <li class="top_bar_li top_bar2_li"><a class="" href="../index.php">Home</a></li>
        <li class="top_bar_li top_bar2_li "><a class="" href="">About</a></li>
        <li class="top_bar_li top_bar2_li "><a class="" href="../products/product_home.php">Products</a>
            <ul class="drop_list">
                <li class=""><a href="../products/brand_home.php?type=mobile">Mobiles</a></li>
                <li class=""><a href="../products/brand_home.php?type=tablet">Tablets</a></li>
            </ul></li>
        <li class="top_bar_li top_bar2_li"><a href="../ContactUs/contact.php">Contact Us</a></li>
        <li class="top_bar_li top_bar2_li"><a href="#faqs">FAQs</a></li>
        <li class="top_bar_li top_bar2_li"><a href="#policy">Policies</a></li>
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
        <form action="../Account/newsletter.php" method="post">
            <label>
                <input type="email" required="" name="email" size="18" maxlength="30" placeholder="enter your email address">
            </label>
            <input type="submit" name="submitnews" value="submit" class="submit">
        </form>

    </aside>

    <div class="content float-right float-sol">
        <h2 class="head" id="top">About</h2>

        <h2 class="subhead">Why PAK-MOBILE ?</h2>
        <p class="descrip">There are hundred of reasons why you should prefer buying from HSN while shopping online.
            One of the basic and important reasons behind that is its reliability as it has been rated as one of the
            safest and reliable options by the masses while shopping online. People at HSN have always taken care of
            their customers because they believe the real wealth is their customers. There are several services at HSN
            that actually no other online or physical store offers.</p>

        <h2 class="head" id="policy">Policy</h2>

        <h2 class="subhead">How we protect your information</h2>
        <p class="descrip">We adopt appropriate data collection, storage and processing practices and security measures
            to protect against unauthorized access, alteration, disclosure or destruction of your personal information,
            username, password, transaction information and data stored on our Site.</p>
        <h2 class="subhead">7 Day Return Policy</h2>
        <p class="descrip">7 Days Replacement Warranty: One such service is 7 days replacement warranty on Smartphones
            that no other online store or physical store offers in the whole country. This service not only provides
            the cushion for people's hard earned money spent on expensive gadgets but also goes on to show how much
            Home Shopping Pakistan care for its customers. The service is pretty realistic and has been used by various
            customers as they are able to return the phone on noticing a single minor scratch on the phone they have
            bought a day earlier. People cherish this service mainly because of satisfaction that their hard earned
            money is well invested and that's why they prefer Home Shopping Network especially while buying Smartphones.</p>
        <h2 class="subhead">Warranty</h2>
        <p class="descrip">1 year warranty: Apart from 7 days checking warranty, HSN also offers one year repair
            warranty as well, again something that that not many people offer in Pakistan for expensive Smartphones.
            For instance, people who buy an expensive Apple iPhone from other than its authorized dealer or HSN won’t
            get the 1 year warranty with it. So it’s better to buy from HSN so that at least you can be on the safe side
            if something malfunctions in your smartphone or you can buy your expensive gadget from a place where you
            don’t get the warranty. Your choice!</p>
        <h2 class="subhead">Price Beating policy</h2>
        <p class="descrip">Price Beating Policy: Now this is one policy that at least I am sure no body offers and
            that is “Price Beating Policy.” Well this should answer to all the questions that must be wandering
            through your head by now. As the name of the policy suggests, Home Shopping Pakistan is dedicated and
            committed in providing you the best service and that too at a price that no one can beat. If you find a
            price of any product that is in stock at any online store but is priced on a little higher side at
            Homeshopping.pk then you can always share the link of that online store and Homeshopping.pk will happily
            beat that price for you and will sell you to even lower price than the other online store is selling for.  </p>
        <h2 class="subhead">Delivery of products </h2>
        <p class="descrip">Delivery of products in 24-48 hours: Unlike other online stores,
            HSN promises to deliver the ordered product in 24 to 48 hours subjected to product’s availability.
            However, if the shipping destination of the product is Karachi and ordered before 1600 hrs then
            it will be delivered the same day. So, you won’t have to wait much longer for your ordered product.</p>
        <h2 class="subhead">Changes to this privacy policy</h2>
        <p class="descrip">Pak-Mobile has the discretion to update this privacy policy at any time. When we do,
            we will revise the updated date at the bottom of this page. We encourage Users to frequently check
            this page for any changes to stay informed about how we are helping to protect the personal information
            we collect. You acknowledge and agree that it is your responsibility to review this privacy policy
            periodically and become aware of modifications.</p>

        <h2 class="head" id="faqs">FAQs</h2>
        <h2 class="subhead">What happens to my Personal Information ?</h2>
        <p class="descrip">We may collect personal identification information from Users in a variety of ways,
            including, but not limited to, when Users visit our site, fill out a form, and in connection with
            other activities, services, features or resources we make available on our Site. Users may be asked for,
            as appropriate, name, email address. Users may, however, visit our Site anonymously. We will collect
            personal identification information from Users only if they voluntarily submit such information to us.
            Users can always refuse to supply personally identification information, except that it may prevent them
            from engaging in certain Site related activities.</p>
        <h2 class="subhead">How do you protect my information ?</h2>
        <p class="descrip">We adopt appropriate data collection, storage and processing practices and security measures
            to protect against unauthorized access, alteration, disclosure or destruction of your personal information,
            username, password, transaction information and data stored on our Site.</p>
        <h2 class="subhead">Can I pre-Order the products before their launch ?</h2>
        <p class="descrip">Never Ending Inventory: Home Shopping Pakistan has one of the biggest inventories that has
            products under different categories like mobile phones, Apple products, tablets, etc. Well its like Home Shopping
            has almost every other product, you name them and they have it.</p>
        <a href="#top" id="bookmark">Top</a>
    </div>

</div>


</div>

<footer>
    <ul class="" id="first">
        <li><a href="../index.php">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="../ContactUs/contact.php">Contact</a></li>
    </ul>

    <ul class="">
        <li><a href="#faqs">FAQs</a></li>
        <li><a href="#policy">Policies</a></li>
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
        <li class=""><a class="" href="../products/product_home.php">Products</a>
        <li class=""><a href="../products/brand_home.php?type=mobile">Mobiles</a></li>
        <li class=""><a href="../products/brand_home.php?type=tablet">Tablets</a></li>
    </ul>

    <ul class="">
        <li><a href="https://www.facebook.com" target="_blank"><img src="../images/facebook-grey.png"></a></li>
        <li><a href="https://twitter.com" target="_blank"><img src="../images/twitter-gray.png"></a></li>
        <li><a href="https://plus.google.com" target="_blank"><img src="../images/google-plus-grey.png"></a></li>
    </ul>
    <div style="clear: both"></div>

</footer>
</div>
</body>
</html>