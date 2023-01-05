<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the show.php page.
        To present customer information when register successfully.
    -->

<head>
    <meta name=" author " content="Lin Chen, Junjie Xu, Yang Xu">
    <meta name=" description " content="CST8285 Assignment2">
    <meta name="keywords" content="kids, books">
    <meta charset="utf-8">
    <title>Login Home Page</title>

    <link rel="stylesheet" href="./CSS/style.css" type="text/css">
</head>

<body>
    <?php
    //connect to the database
    require_once('database.php');
    $db = db_connect();
    ?>

    <header>
        <img src="Picture/headerback.jpg" alt="background picture" id="imgheader">

        <nav class="navigation">
            <a class="navlink" href="home.php">HOME</a>
            <a class="navlink" href="0-5.php">KIDS(0-5)</a>
            <a class="navlink" href="6-8.php">KIDS(6-8)</a>
            <a class="navlink" href="login.php">LOG IN</a>
            <div class="searchsection">
                <input type="text" id="searchbar" placeholder="Search for Books..." size="60">
            </div>
            <!-- <div id="out">
                <h2 id="loginuser"><?php echo $result['username'] ?></h2>
                <a class="navlink" href="logout.php" id="logoutclick">Log Out</a>
            </div> -->
        </nav>
    </header>

    <!-- display successful information -->
    <div id="content">
        <?php
        if (isset($_SESSION['valid_user'])) {
            echo '<h1>Welcom Back: ' . $_SESSION['valid_user'] . '</h1>';

            echo '<h1>Your identical session ID is ' . session_id() . '</h1>';

            echo '<a href="logout.php">Log out</a>';
            } else {
                echo "<img src='Picture/oops.jpg'>";
                echo"<h1>Something wrong! Please <a id='lglink' href ='login.php'>login</a> first!</h1>";
        }
        ?>
    </div>

    <?php include "footer.php" ?>
</body>

</html>