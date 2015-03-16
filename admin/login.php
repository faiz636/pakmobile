<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title>Pak Mobile - ADMIN - Login\SignUp</title>
    <link rel="SHORTCUT ICON" href="../images/web-logo2-icon.ico" type="image/ico" >
    <style>
        .page{
            width: 20%;
            margin: auto;
            margin-top: 20%;
        }
        a{
            text-decoration: none;
            background-color: #999999;
            color: lightsteelblue;
            padding: 5px;
            margin: 0px auto 20px 10px;
        }
    </style>
</head>
<body>
<div class="page">
    <a href="../index.php">HOME</a>
    <br><br>
    <fieldset>
        <legend>ADMIN</legend>
        <form action="admin_login.php" method="post">
            <?php
                if(isset($_SESSION['err'])) {
                    echo "<p><b>";
                    echo $_SESSION['err'];
                    unset($_SESSION['err']);
                    echo "</p></b>";
                }
            ?>
            <br />
            <label>
                <input type="text" name="admin" size="18" maxlength="30" required="required" placeholder="enter your email address" />
            </label>
            <br /><br />
            <label>
                <input type="password" name="password" size="18" maxlength="30" placeholder="enter password" />
            </label>
            <br /><br />
            <input class="" type="submit" name="login" value="login" />
        </form>
    </fieldset>
</div>
</body>
</html>