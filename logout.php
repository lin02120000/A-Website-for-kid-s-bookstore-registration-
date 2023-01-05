<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the logout.php page.
    -->
<?php 
session_start();
session_destroy();
header("location: index.php");
?>