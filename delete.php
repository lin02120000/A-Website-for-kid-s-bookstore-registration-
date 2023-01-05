<!DOCTYPE html>
<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the delete.php page.
    -->

<head>
<link rel="stylesheet" href="CSS/style.css" type="text/css">
<script src="JS/formvalidate.js" defer></script>
</head>

<body>
  <?php

  require_once('database.php');
  include "header.php";
  $db = db_connect();

  if (!isset($_GET['id'])) {
    header("Location:  index.php");
  }
  $id = $_GET['id'];
  // if we decided to delete, execute delete query and redirect to the main page

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "DELETE FROM customer WHERE id ='$id'";
    $result = mysqli_query($db, $sql);
    //redirect to the main page
    header("Location: index.php");
  } else  // to access the employee data
  {
    $sql = "SELECT * FROM customer WHERE id= '$id' ";

    $result_set = mysqli_query($db, $sql);

    $result = mysqli_fetch_assoc($result_set);
  }

  ?>

  <?php $page_title = 'Delete Page'; ?>


  <div id="content">
    <div class="deletecustomer">
      <h1>Customer Delete</h1>
      <p>Are you sure you want to delete this Customer?</p>
      <p class="deletedname"><?php echo $result['username']; ?></p>

      <form action="<?php echo 'delete.php?id=' . $result['id']; ?>" method="post">
        <div id="clickbns">
          <input id="submitbn" type="submit" value="Delete">
        </div>
      </form>
    </div>
  </div>

  <a href="<?php echo 'index1.php'; ?>" id="indexpage">Go to administration page</a>

  <?php include 'footer.php'; ?>
</body>
</html>