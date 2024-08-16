<<<<<<< HEAD
<?php
include('./env.php');

include('./delete.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<h3 class="h3">Crud Operation In PHP</h3>
<div class="container">
  <div class="box1">
    <h2>All Students</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Student</button>
  </div>
  <table class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM `crud`";
      $result = mysqli_query($connection, $query);

      if (!$result) {
        echo "Query Failed: " . mysqli_error($connection);
      } else {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['firstName']}</td>
        <td>{$row['lastName']}</td>
        <td>{$row['age']}</td>
        <td><a class='btn btn-success' href='update.php?id={$row['id']}'>Update</a></td>
        <td><a class='btn btn-danger' href='delete.php?id={$row['id']}'>Delete</a></td>
      </tr>";
        }
      }
      ?>
    </tbody>
  </table>

  <?php

  if (isset($_GET['message'])) {
    echo "<h6 class= h6 >"  . htmlspecialchars($_GET['message']) . "</h6>";
  }

  if (isset($_GET['insert_msg'])) {
    echo "<h6 class= h6 >"  . htmlspecialchars($_GET['insert_msg']) . "</h6>";
  }

  if (isset($_GET['update_msg'])) {
    echo "<h6 class= h6 >"  . htmlspecialchars($_GET['update_msg']) . "</h6>";
  }

  if (isset($_GET['delete_msg'])) {
    echo "<h6 class= h6 >" . htmlspecialchars($_GET['delete_msg']) . "</h6>";
  }


  ?>






  <form action="./insertData.php" method="post">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Student Header</h4>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label for="f-name">First Name</label>
              <input type="text" name="f_name" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="l-name">Last Name</label>
              <input type="text" name="l_name" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="text" name="age" value="" class="form-control">
            </div>

          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="add_student" value="ADD">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

  </form>

=======
<?php
include('./env.php');

include('./delete.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<h3 class="h3">Crud Operation In PHP</h3>
<div class="container">
  <div class="box1">
    <h2>All Students</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Student</button>
  </div>
  <table class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM `crud`";
      $result = mysqli_query($connection, $query);

      if (!$result) {
        echo "Query Failed: " . mysqli_error($connection);
      } else {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['firstName']}</td>
        <td>{$row['lastName']}</td>
        <td>{$row['age']}</td>
        <td><a class='btn btn-success' href='update.php?id={$row['id']}'>Update</a></td>
        <td><a class='btn btn-danger' href='delete.php?id={$row['id']}'>Delete</a></td>
      </tr>";
        }
      }
      ?>
    </tbody>
  </table>

  <?php

  if (isset($_GET['message'])) {
    echo "<h6 class= h6 >"  . htmlspecialchars($_GET['message']) . "</h6>";
  }

  if (isset($_GET['insert_msg'])) {
    echo "<h6 class= h6 >"  . htmlspecialchars($_GET['insert_msg']) . "</h6>";
  }

  if (isset($_GET['update_msg'])) {
    echo "<h6 class= h6 >"  . htmlspecialchars($_GET['update_msg']) . "</h6>";
  }

  if (isset($_GET['delete_msg'])) {
    echo "<h6 class= h6 >" . htmlspecialchars($_GET['delete_msg']) . "</h6>";
  }


  ?>






  <form action="./insertData.php" method="post">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Student Header</h4>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label for="f-name">First Name</label>
              <input type="text" name="f_name" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="l-name">Last Name</label>
              <input type="text" name="l_name" value="" class="form-control">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="text" name="age" value="" class="form-control">
            </div>

          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" name="add_student" value="ADD">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

  </form>

>>>>>>> origin/main
  <body>