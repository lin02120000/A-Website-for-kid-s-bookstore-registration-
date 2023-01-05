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
    <title>Username Already Exists.</title>
</head>

<body class="mainbody">
    <header>
        <img src="Picture/headerback.jpg" alt="background picture" id="imgheader">

        <nav class="navigation">
            <a class="navlink" href="home.php">HOME</a>
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

    <!-- display information -->
    <div id="content">
        <h1>We are sorry...</h1>
        <p>An account with the given username already exists. Please try again.</p>

        <a href="<?php echo 'signup.php'; ?>" id="indexpage">Back to signup page</a>
    </div>

    <?php include "footer.php" ?>
</body>
</html>