<?php
session_start();

require_once('database.php');
$db = db_connect();

if(isset($_POST['loginname']) && isset($_POST['loginpasswd'])){
    $userid = $_POST['loginname'];
    $password = $_POST['loginpasswd'];

    //validate if the user have been registered
    $sql = "select * from customer where username = '$userid' and password = '$password'";
    $result_set = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($result_set);
    if($result['username']>-1 && $result['password']>-1){//customer exist
        $_SESSION['valid_user'] = $userid;
        $_SESSION['valid_pass'] = $password;
        header("location:user.php");
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the login.html page.
    -->

<head>
    <meta name=" author " content="Lin Chen, Junjie Xu, Yang Xu">
    <meta name=" description " content="CST8285 Assignment2">
    <meta name="keywords" content="kids, books">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/phpstyle.css" type="text/css">
    <script src="JS/loginvalidate.js" defer></script>
</head>

<body class="mainbody">
    <header>
        <img src="Picture/headerback.jpg" alt="background picture" id="imgheader">

        <nav class="navigation">
            <a class="navlink" href="index.php">HOME</a>
            <a class="navlink" href="0-5.php">KIDS(0-5)</a>
            <a class="navlink" href="6-8.php">KIDS(6-8)</a>
            <a class="navlink" href="login.php">LOG IN</a>
            <a class="navlink" href="signup.php">SIGN UP</a>
            <!-- <div class="searchsection">
                <input type="text" id="searchbar" placeholder="Search for Books..." size="60">
                <button type="submit">Search</button>
            </div> -->
        </nav>
    </header>

    <?php
    $loginerror = $loginerror2 = "";
    $succ = "";
    if (isset($_SESSION['valid_user'])) {
        $succ = "You have logged in successfully!";
        } else {
            if(isset($userid)){
                $loginerror = "Invalid username entered!";
                $loginerror2 = "Invalid password entered!";
            }
        }
    ?>

    <div class="loginsection">
        <form name="logform" action="login.php" method="post"> 
            <div class="logincontainer">
                <h1 id="logintitle">Returning Customer</h1>
            </div>  
            <div class="logincontainer">
                <label for="loginname">Username:</label>
                <input type="text" id="loginname" name="loginname" placeholder="Username" oninput="validateUser()">
                <small class="loginerror" id="lgn"><?php echo "$loginerror" ?></small>
            </div>
            <div class="logincontainer">
                <label for="loginpasswd">Password:</label>
                <input type="password" id="loginpasswd" name="loginpasswd" placeholder="Password" oninput="validateLogPass()">
                <small class="loginerror" id="lgp"><?php echo "$loginerror2" ?></small>
            </div>
            <div class="logincontainer">
                <p id="logintitle"><?php echo "$succ"?><p>
            </div> 
            <div id="loginbns">
                <input id="loginbn" type="submit" value="Log In">
                <input id="loginreset" type="reset" value="Reset">
            </div>
            <div>
                <p><a href="user.php">Go to Personal Page</a></p>
            </div>
        </form>
        <!-- <div class="verticalline"></div> -->
        <hr>

        <div class="signuplink">
            <h1 class="sl">New Customer</h1>
            <p class="sl">Create an account to receive emails about your orders!</p>
            <a class="createaccount" href="signup.php"><button id="ca">CREATE ACCOUNT</button></a>
        </div>
    </div>

    <footer>
        <div id="footercontainer">
            <p id="follow">Follow Us</p>
            <a id="fbicon" class="followicon" target="black" href="https://www.facebook.com/"><img src="Picture/facebook.jpg" alt="facebook icon"></a>
            <a id="twicon" class="followicon" target="black" href="https://twitter.com"><img src="Picture/twitter.jpg" alt="twitter icon"></a>
            <a id="isicon" class="followicon" target="black" href="https://www.instagram.com"><img src="Picture/instagram.jpg" alt="instagram icon"></a>
            <p id="copyright">© Copy right 2022 .All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>