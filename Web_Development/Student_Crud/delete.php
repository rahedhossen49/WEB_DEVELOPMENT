<<<<<<< HEAD
<?php
include('./env.php')
?>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM `crud` WHERE `id` = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo "Query Failed: " . mysqli_error($connection);
  } else {
    header('Location: index.php?delete_msg= Delete successfully');
  }
}
=======
<?php
include('./env.php')
?>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM `crud` WHERE `id` = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo "Query Failed: " . mysqli_error($connection);
  } else {
    header('Location: index.php?delete_msg= Delete successfully');
  }
}
>>>>>>> origin/main
?>