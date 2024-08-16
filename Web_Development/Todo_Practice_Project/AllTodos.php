<<<<<<< HEAD
<?php

session_start();
include('./Database/env.php'); // Ensure this path is correct
// Remove include('./controller/todoDelete.php'); from here

$Query = "SELECT * FROM todo ORDER BY id DESC";
$res = mysqli_query($connection, $Query);
$posts = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>

  <style>
    .h6 {
      justify-content: center;
      text-align: center;
      color: #198754 !important;
      font-size: 1rem !important;
    }

    .btn-edit {
      background-color: #007bff;
      border-color: #007bff;
      color: white;
    }

    .btn-delete {
      background-color: #dc3545;
      border-color: #dc3545;
      color: white;
    }

    .table-responsive .btn-group a {
      margin: 0 5px;
    }
  </style>

  <div class="container mt-5">
    <div class="col-lg-6 mx-auto">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active text-danger" aria-current="page" href="./index.php">Add Todo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">All Todo</a>
            </li>
          </ul>
        </div>

        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
        </div>
        <?php
        if (isset($_GET['delete_msg'])) {
          echo "<h6 class='h6'>" . htmlspecialchars($_GET['delete_msg']) . "</h6>";
        }
        ?>

        <?php
        foreach ($posts as $key => $post) {
        ?>
          <tr>
            <td><?= ++$key ?></td>
            <td><?= empty($post['title']) ? '---' : $post['title'] ?></td>
            <td><?= empty($post['details']) ? '---' : (strlen($post['details']) > 11 ? substr($post['details'], 0, 10) . '....' : $post['details']) ?></td>
            <td>
              <a href="./editTodo.php?id=<?= $post['id'] ?>" class="btn btn-edit btn-sm">Edit</a>
            </td>
            <td>
              <a href="./controller/todoDelete.php?id=<?= $post['id'] ?>" class="btn btn-delete btn-sm">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
session_unset();
?>
=======
<?php

session_start();
include('./Database/env.php'); 


$Query = "SELECT * FROM todo ORDER BY id DESC";
$res = mysqli_query($connection, $Query);
$posts = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>

  <style>
    .h6 {
      justify-content: center;
      text-align: center;
      color: #198754 !important;
      font-size: 1rem !important;
    }

    .btn-edit {
      background-color: #007bff;
      border-color: #007bff;
      color: white;
    }

    .btn-delete {
      background-color: #dc3545;
      border-color: #dc3545;
      color: white;
    }

    .table-responsive .btn-group a {
      margin: 0 5px;
    }
  </style>

  <div class="container mt-5">
    <div class="col-lg-6 mx-auto">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active text-danger" aria-current="page" href="./index.php">Add Todo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">All Todo</a>
            </li>
          </ul>
        </div>

        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="thead-light">
              <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
        </div>
        <?php
        if (isset($_GET['delete_msg'])) {
          echo "<h6 class='h6'>" . htmlspecialchars($_GET['delete_msg']) . "</h6>";
        }
        ?>

        <?php
        foreach ($posts as $key => $post) {
        ?>
          <tr>
            <td><?= ++$key ?></td>
            <td><?= empty($post['title']) ? '---' : $post['title'] ?></td>
            <td><?= empty($post['details']) ? '---' : (strlen($post['details']) > 11 ? substr($post['details'], 0, 10) . '....' : $post['details']) ?></td>
            <td>
              <a href="./editTodo.php?id=<?= $post['id'] ?>" class="btn btn-edit btn-sm">Edit</a>
            </td>
            <td>
              <a href="./controller/todoDelete.php?id=<?= $post['id'] ?>" class="btn btn-delete btn-sm">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
session_unset();
?>
>>>>>>> origin/main
