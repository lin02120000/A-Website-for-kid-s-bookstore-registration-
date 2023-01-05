<!-- landing page -->
<!DOCTYPE html>
<html lang="en">
<!--
        Author: Lin Chen, Junjie Xu, Yang Xu
        Date: 10-11-2022
        Section: CST 8285 Assignment 2
        This is the index.php page.
    -->
<head>
<link rel="stylesheet" href="CSS/style.css" type="text/css">
  <title>PHP_KBOOK</title>
</head>

<body>

  <?php include("header.php");
  //connect with the database
  
  require_once('database.php');

  $db = db_connect(); //my connection

  $sql = "SELECT * FROM customer "; //query string
  $sql .= "ORDER BY username ASC";//to be reviewed.
  //execute the query
  $result_set = mysqli_query($db, $sql);

  ?>

  <div id="content">
    <table class="list">
      <tr>
        <th>ID</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>phonenumber</th>
        <th>&nbsp</th>
        <th>&nbsp</th>
        <th>&nbsp</th>
      </tr>
        <!-- Process the results -->
      <?php while ($results = mysqli_fetch_assoc($result_set)) { ?>
        <tr>
          <td><?php echo $results['id']; ?></td>
          <td><?php echo $results['username']; ?></td>
          <td><?php echo $results['email']; ?></td>
          <td><?php echo $results['password']; ?></td>
          <td><?php echo $results['phonenumber']; ?></td>
          <!-- send the id as parameter -->
          <td><a class="action" href="<?php echo "view.php?id=" . $results['id']; ?>">View</a></td>
          <td><a class="action" href="<?php echo "edit.php?id=" . $results['id']; ?>">Edit</a></td>
          <td><a class="action" href="<?php echo "delete.php?id=" . $results['id']; ?>">delete</a></td>
        </tr>
      <?php } ?>
    </table>

    <div>
      <h3><a class="action" href="signup.php">Create New Customer</a></h3>
    </div>
  </div>

  <!-- add the footer here -->
  <?php include("footer.php"); ?>
</body>

</html>