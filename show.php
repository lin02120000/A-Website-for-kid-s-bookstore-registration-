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
    <title>Register Successfully</title>
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
    $sql = "select username from customer where id = '$id' ";

    $result_set = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($result_set);
    ?>

    <!-- display successful information -->
    <div id="content">
        <h1>Thank you: <?php echo $result['username'] ?></h1>
        <p> You have successfully registered or updated your information.</p>

        <a href="<?php echo 'index1.php'; ?>" id="indexpage">Back to administration page</a>
    </div>

    <?php include "footer.php" ?>
</body>
</html>