<!DOCTYPE html>
<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
         This is the edit.php page.
        Be able to edit customer's personal information
    -->

<head>
    <meta name=" author " content="Lin Chen, Junjie Xu, Yang Xu">
    <meta name=" description " content="CST8285 Assignment2">
    <meta name="keywords" content="kids, books">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <!-- <script src="JS/formvalidate.js" defer></script> -->
</head>

<body>

    <?php
    require_once('database.php');
    $db = db_connect();


    if (!isset($_GET['id'])) { //check if we get the id
        header("Location:  index.php");
    }
    $id = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //access the customer information
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phonenumber = $_POST['phonenumber'];
        //update the table with new information
        $sql = "UPDATE customer set username = '$name' , email= '$email' , password= '$password', phonenumber= '$phonenumber' where id = '$id' ";
        $result = mysqli_query($db, $sql);
        //redirect to show page
        header("Location: show.php?id=  $id");
    }
    // display the customer information
    else {
        $sql = "SELECT * FROM customer WHERE id= '$id' ";

        $result_set = mysqli_query($db, $sql);

        $result = mysqli_fetch_assoc($result_set);
    }

    ?>

    <?php include 'header.php' ?>

    <div id="content">
        <h1>Edit Customer</h1>

        <form form action="<?php echo 'edit.php?id=' . $result['id']; ?>" method="post">
            <dl>
                <dt> ID</dt>
                <dd><input type="text" name="id" value="<?php echo $result['id']; ?>" /></dd>
            </dl>
            <dl>
                <dt>Name</dt>
                <dd><input type="text" name="username" value="<?php echo $result['username']; ?>" /></dd>
            </dl>
            <dl>
                <dt>Email</dt>
                <dd><input type="text" name="email" value="<?php echo $result['email']; ?>" /></dd>
            </dl>
            <dl>
                <dt>Password</dt>
                <dd><input type="text" name="password" value="<?php echo $result['password']; ?>" /></dd>
            </dl>
            <dl>
                <dt>PhoneNumber</dt>
                <dd><input type="text" name="phonenumber" value="<?php echo $result['phonenumber']; ?>" /></dd>
            </dl>

            <div id="clickbns">
                <input id="submitbn" type="submit" value="Edit Customer">
            </div>
        </form>
    </div>
    <a href="<?php echo 'index1.php'; ?>" id="indexpage">Go to administration page</a>
    <?php include "footer.php"; ?>
</body>

</html>