<<<<<<< HEAD
<?php
include('./env.php');

if (isset($_POST["add_student"])) {

  $fname = $_POST["f_name"];
  $lname = $_POST["l_name"];
  $age = $_POST["age"];


  if ($fname == "" || empty($fname)) {
    header('Location: index.php ? message= Please Input Your First Name ');
  } else {
    $query = "insert into `crud`(`firstName`,`lastName`,`age`) values('$fname','$lname','$age')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      echo ("query failed" . mysqli_error($connection));
    } else {
      header('Location: index.php ? insert_msg = your data has been added Successfuly');
    }
  }
}
=======
<?php
include('./env.php');

if (isset($_POST["add_student"])) {

  $fname = $_POST["f_name"];
  $lname = $_POST["l_name"];
  $age = $_POST["age"];


  if ($fname == "" || empty($fname)) {
    header('Location: index.php ? message= Please Input Your First Name ');
  } else {
    $query = "insert into `crud`(`firstName`,`lastName`,`age`) values('$fname','$lname','$age')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      echo ("query failed" . mysqli_error($connection));
    } else {
      header('Location: index.php ? insert_msg = your data has been added Successfuly');
    }
  }
}
>>>>>>> origin/main
