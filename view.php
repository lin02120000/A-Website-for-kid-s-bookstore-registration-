<!DOCTYPE html>

<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the view.php page.
        To display customer detail informaion.
    -->

<head>
    <meta name=" author " content="Lin Chen, Junjie Xu, Yang Xu">
    <meta name=" description " content="CST8285 Assignment2">
    <meta name="keywords" content="kids, books">
    <meta charset="utf-8">
    <title>Customer Information</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>

<body>
    <?php
    //connect to the database
    require_once('database.php');
    include "header.php";
    $db = db_connect();

    //access URL parameter
    $id = $_GET['id'];

    //sql query
    $sql = "select * from customer where id = '$id' ";

    $result_set = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($result_set);
    ?>

    <!-- display successful information -->

    <div id="content">
        <h1 class="welcome">Welcome: <?php echo $result['username'] ?></h1>
        <div class="viewcontainer">
            <dl class="viewitems">
                <dt>UserName:</dt>
                <dd class="des"><?php echo $result['username'] ?></dd>
            </dl>
            <dl class="viewitems">
                <dt>Email:</dt>
                <dd class="des"><?php echo $result['email'] ?></dd>
            </dl>
            <dl class="viewitems">
                <dt>Password:</dt>
                <dd class="des"><?php echo $result['password'] ?></dd>
            </dl>
            <dl class="viewitems">
                <dt>PhoneNumber:</dt>
                <dd class="des"><?php echo $result['phonenumber'] ?></dd>
            </dl>
        </div>
    </div>
    <a href="<?php echo 'index1.php'; ?>" id="indexpage">Back to administration page</a>
    <?php include "footer.php" ?>
</body>

</html>