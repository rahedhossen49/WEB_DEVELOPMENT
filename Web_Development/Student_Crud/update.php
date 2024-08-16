<<<<<<< HEAD
<?php
include('./header.php');
include('./env.php');
$row = [];

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "SELECT * FROM `crud` WHERE `id` = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo "Query Failed: " . mysqli_error($connection);
  } else {
    $row = mysqli_fetch_assoc($result);
  }
}
?>

<?php
if (isset($_POST["update_student"])) {
  if (isset($_GET['id_new'])) {
    $id_new = $_GET['id_new'];
  }
  $fname = $_POST["f_name"];
  $lname = $_POST["l_name"];
  $age = $_POST["age"];

  $query  = "UPDATE `crud` SET `firstName` = '$fname', `lastName` = '$lname', `age` = '$age' WHERE `id` = '$id_new'";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo "Query Failed: " . mysqli_error($connection);
  } else {
    header('Location: index.php?update_msg=update successfully');
  }
}
?>


<form action="./update.php?id_new=<?php echo $id ?>" method="post">

  <div class="form-group">
    <label for="f-name">First Name</label>
    <input type="text" name="f_name" class="form-control" value="<?php echo $row['firstName'] ?>">
  </div>
  <div class="form-group">
    <label for="l-name">Last Name</label>
    <input type="text" name="l_name" class="form-control" value="<?php echo $row['lastName'] ?>">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" name="age" class="form-control" value="<?php echo $row['age'] ?>">
  </div>
  <input type="submit" class="btn btn-success" name="update_student" value="Update">
=======
<?php
include('./header.php');
include('./env.php');
$row = [];

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "SELECT * FROM `crud` WHERE `id` = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo "Query Failed: " . mysqli_error($connection);
  } else {
    $row = mysqli_fetch_assoc($result);
  }
}
?>

<?php
if (isset($_POST["update_student"])) {
  if (isset($_GET['id_new'])) {
    $id_new = $_GET['id_new'];
  }
  $fname = $_POST["f_name"];
  $lname = $_POST["l_name"];
  $age = $_POST["age"];

  $query  = "UPDATE `crud` SET `firstName` = '$fname', `lastName` = '$lname', `age` = '$age' WHERE `id` = '$id_new'";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo "Query Failed: " . mysqli_error($connection);
  } else {
    header('Location: index.php?update_msg=update successfully');
  }
}
?>


<form action="./update.php?id_new=<?php echo $id ?>" method="post">

  <div class="form-group">
    <label for="f-name">First Name</label>
    <input type="text" name="f_name" class="form-control" value="<?php echo $row['firstName'] ?>">
  </div>
  <div class="form-group">
    <label for="l-name">Last Name</label>
    <input type="text" name="l_name" class="form-control" value="<?php echo $row['lastName'] ?>">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" name="age" class="form-control" value="<?php echo $row['age'] ?>">
  </div>
  <input type="submit" class="btn btn-success" name="update_student" value="Update">
>>>>>>> origin/main
</form>