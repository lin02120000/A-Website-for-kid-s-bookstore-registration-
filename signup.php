<!DOCTYPE html>
<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the sign up.html page.
    -->

<head>
    <meta name=" author " content="Lin Chen, Junjie Xu, Yang Xu">
    <meta name=" description " content="CST8285 Assignment2">
    <meta name="keywords" content="kids, books">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <script src="JS/formvalidate.js" defer></script>
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
            <a class="navlink" href="index1.php">ADMINISTRATION</a>
            <!-- <div class="searchsection">
                <input type="text" id="searchbar" placeholder="Search for Books..." size="60">
                <button type="submit">Search</button>
            </div> -->
        </nav>
    </header>

<div class="createsection">
    <form name="signform" action='create.php' method="POST" onsubmit="return validate();">
        <h1 id="signuptitle">Create an Account</h1>

        <div class="createcontainer">
            <label for="name">Username:</label>
            <input type="text" id="name" name="nameinfo" placeholder="Username">
        </div>
        <div class="createcontainer">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="emailinfo" placeholder="Email Address">
        </div>
        <div class="createcontainer">
            <label for="passwd">Password:</label>
            <input type="password" id="passwd" name="passwdinfo" placeholder="Password">
        </div>
        <div class="createcontainer">
            <label for="passwd2">Comfirm Password:</label>
            <input type="password" id="passwd2" name="cpasswdinfo" placeholder="Comfirm Password">
        </div>
        <div class="createcontainer">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phoneinfo" placeholder="Phone Number">
        </div>
        <div class="checkbox">
            <input type="checkbox" name="terms" id="terms">
            <label for="terms">I agree to accept all the terms and conditions</label>
        </div>
        <div id="clickbns">
            <input id="submitbn" type="submit" value="Sign Up">
            <input id="resetbn" type="reset" value="Reset">
        </div>
    </form>
</div>

    <footer id="footer">
        <div id="footercontainer">
            <p id="follow">Follow Us</p>
            <a id="fbicon" class="followicon" target="black" href="https://www.facebook.com/"><img
                    src="Picture/facebook.jpg" alt="facebook icon"></a>
            <a id="twicon" class="followicon" target="black" href="https://twitter.com"><img src="Picture/twitter.jpg"
                    alt="twitter icon"></a>
            <a id="isicon" class="followicon" target="black" href="https://www.instagram.com"><img
                    src="Picture/instagram.jpg" alt="instagram icon"></a>
            <p id="copyright">© Copy right 2022 .All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>