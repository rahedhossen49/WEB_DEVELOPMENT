<<<<<<< HEAD
<?php
session_start();
include('./Database/env.php');
$id = $_REQUEST['id'];
$query = "SELECT * FROM todo WHERE id = '$id'";
$res = mysqli_query($connection, $query);
$post = mysqli_fetch_assoc($res);

if (!$post) {
  header('Location:404.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Todo</title>
</head>

<body>
  <style>
    .h6 {
      justify-content: center;
      text-align: center;
      color: #198754 !important;
      font-size: 1rem !important;
    }
  </style>

  <div class="container mt-5">
    <div class="col-lg-3 mx-auto">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active text-danger" aria-current="page" href="#">Edit Todo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./AllTodos.php">All Todo</a>
            </li>
          </ul>
        </div>

        <div class="card-body">
          <form method="POST" action="./controller/todoUpdate.php">
            <input type="hidden" name="id" value="<?= $post['id'] ?? '' ?>">
            <input value="<?= $post['title'] ?? '' ?>" type="text" class="form-control my-3" name="title" placeholder="Edit Todo title">
            <textarea name="detail" class="form-control my-3" placeholder="Edit Todo Detail"><?= $post['details'] ?? '' ?></textarea>
            <button class="btn btn-primary rounded-0">Update Todo</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?
=======
<?php
session_start();
include('./Database/env.php');
$id = $_REQUEST['id'];
$query = "SELECT * FROM todo WHERE id = '$id'";
$res = mysqli_query($connection, $query);
$post = mysqli_fetch_assoc($res);

if (!$post) {
  header('Location:./404.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Todo</title>
</head>

<body>
  <style>
    .h6 {
      justify-content: center;
      text-align: center;
      color: #198754 !important;
      font-size: 1rem !important;
    }
  </style>

  <div class="container mt-5">
    <div class="col-lg-3 mx-auto">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active text-danger" aria-current="page" href="#">Edit Todo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./AllTodos.php">All Todo</a>
            </li>
          </ul>
        </div>

        <div class="card-body">
          <form method="POST" action="./controller/todoUpdate.php">
            <input type="hidden" name="id" value="<?= $post['id'] ?? '' ?>">
            <input value="<?= $post['title'] ?? '' ?>" type="text" class="form-control my-3" name="title" placeholder="Edit Todo title">
            <textarea name="detail" class="form-control my-3" placeholder="Edit Todo Detail"><?= $post['details'] ?? '' ?></textarea>
            <button class="btn btn-primary rounded-0">Update Todo</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?
>>>>>>> origin/main
