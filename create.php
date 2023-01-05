<?php

require_once('database.php');
$db = db_connect();

// Handle form values sent by signup.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //make sure we submit the data
  $nameinfo = $_POST['nameinfo']; // access the form data
  $emailinfo = $_POST['emailinfo'];
  $cpasswdinfo = $_POST['cpasswdinfo'];
  $phoneinfo = $_POST['phoneinfo'];

//validate if username already exist
$sql = "SELECT username FROM customer WHERE username= '$nameinfo'";
$sql = mysqli_query($db, $sql);
if(mysqli_num_rows($sql)>=1) { header("Location:  userexist.php");
  

} else {  
  //prepare your query string
  $sql = "INSERT INTO customer (username, email, password, phonenumber) VALUES ('$nameinfo','$emailinfo','$cpasswdinfo','$phoneinfo')";
  $result = mysqli_query($db, $sql);
  // For INSERT statements, $result is true/false

  $id = mysqli_insert_id($db); //the mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) 
  //redirect to show page with generated id as a parameter
  header("Location: show.php?id=  $id");
} }else {
  header("Location:  signup.php");
}
