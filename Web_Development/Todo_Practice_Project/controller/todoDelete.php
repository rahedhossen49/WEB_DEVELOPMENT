<<<<<<< HEAD
<?php
include('../Database/env.php');

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);

  $query = "DELETE FROM `todo` WHERE `id` = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo "Query Failed: " . mysqli_error($connection);
  } else {
    header('Location: ../AllTodos.php?delete_msg=Delete successful');
    exit();
  }
}
=======
<?php
include('../Database/env.php');

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);

  $query = "DELETE FROM `todo` WHERE `id` = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo "Query Failed: " . mysqli_error($connection);
  } else {
    header('Location: ../AllTodos.php?delete_msg=Delete successful');
    exit();
  }
}
>>>>>>> origin/main
