<!DOCTYPE html>

<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the index.html page.
    -->

<head>
    <meta name=" author " content="Lin Chen, Junjie Xu, Yang Xu">
    <meta name=" description " content="CST8285 Assignment2">
    <meta name="keywords" content="kids, books">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./CSS/style.css" type="text/css">
    <link rel="stylesheet" href="./CSS/index.css" type="text/css">
    <script src="./JS/autoplay.js"></script><!-- external link to autoplay.css which located in JS folder-->
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
            <div class="searchsection">
                <input type="text" id="searchbar" placeholder="Search for Books..." size="60">
                <!-- <button type="submit">Search</button> -->
            </div>
        </nav>
    </header>

    <div id="bodyimg">
        <div class="template">

            <div class="main-picture">
                <h2><b><em>INSTERESTING FOR KIDS!</b></em></h2>
                <div id="outer" class="big-picture">
                    <ul id="imgList">
                        <!-- pictures for the landing page -->
                        <li><img src="./picture/00.jpg" alt=""></li>
                        <li><img src="./picture/01.jpg" alt=""></li>
                        <li><img src="./picture/02.jpg" alt=""></li>
                        <li><img src="./picture/03.jpg" alt=""></li>
                        <li><img src="./picture/04.jpg" alt=""></li>
                        <li><img src="./picture/05.jpg" alt=""></li>

                    </ul>
                    <div id="navDot">
                        <a class="dot" href="javascript:;"></a>
                        <a class="dot" href="javascript:;"></a>
                        <a class="dot" href="javascript:;"></a>
                        <a class="dot" href="javascript:;"></a>
                        <a class="dot" href="javascript:;"></a>
                        <a class="dot" href="javascript:;"></a>
                    </div>
                </div>

            </div>

            <h2><b><em>most popular books!</em></b></h2>
            <div class="grid-container">
                <div class="grid-item1">
                    <a href="0-5.php">
                        <img class="img000" src="Picture/00.jpg" alt="My picture 00."></a>
                </div>
                <div class="grid-item1">
                    <a href="0-5.php">
                        <img class="img000" src="Picture/01.jpg" alt="My picture 01."></a>
                </div>
                <div class="grid-item1">
                    <a href="0-5.php">
                        <img class="img000" src="Picture/02.jpg" alt="My picture 02."></a>
                </div>
                <div class="grid-item1">
                    <a href="0-5.php">
                        <img class="img000" src="Picture/03.jpg" alt="My picture 03."></a>
                </div>
                <div class="grid-item2">
                    <a href="6-8.php">
                        <img class="img000" src="Picture/12.jpg" alt="My picture 04."></a>
                </div>
                <div class="grid-item2">
                    <a href="6-8.php">
                        <img class="img000" src="Picture/13.jpg" alt="My picture 05."></a>
                </div>
                <div class="grid-item2">
                    <a href="6-8.php">
                        <img class="img000" src="Picture/17.jpg" alt="My picture 06."></a>
                </div>
                <div class="grid-item2">
                    <a href="6-8.php">
                        <img class="img000" src="Picture/22.jpg" alt="My picture 07."></a>
                </div>
            </div>
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