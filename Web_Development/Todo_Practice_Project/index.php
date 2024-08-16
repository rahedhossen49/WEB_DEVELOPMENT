<<<<<<< HEAD
<?php
session_start();
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
  </style>



  <!-- //Navbar -->
  <div class="container mt-5">
    <div class="col-lg-3 mx-auto">
      <div class="card ">
        <div class="card-header d-flex justify-content-between">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active text-danger" aria-current="page" href="#">Add Todo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./AllTodos.php">All Todo</a>
            </li>
          </ul>
        </div>



        <?php

        if (isset($_GET['dataAdd_msg'])) {
          echo "<h6 class= h6 >"  . htmlspecialchars($_GET['dataAdd_msg']) . "</h6>";
        }

        if (isset($_GET['delete_msg'])) {
          echo "<h6 class= h6 >" . htmlspecialchars($_GET['delete_msg']) . "</h6>";
        }


        ?>


        <!-- //Card Body -->

        <div class="card-body">
          <form method="POST" action="./controller/todoStore.php">
            <input value="<?= $_SESSION['old data']['title'] ?? null ?>" type="text" class="form-control my-3" name="title" placeholder="Enter Your Todo Title">
            <p class="text-danger">
              <?= $_SESSION['errors']['title_error'] ?? null ?> </p>
            <textarea name="detail" class="form-control my-3" id="" placeholder="Enter Your Todo Detail"><?= $_SESSION['old data']['detail'] ?? null ?></textarea>
            <p class="text-danger">
              <?= $_SESSION['errors']['detail_error'] ?? null ?> </p>
            <button class="btn btn-primary rounded-0">Add Todo</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



<?php
session_unset()
=======
<?php
session_start();
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
  </style>



  <!-- //Navbar -->
  <div class="container mt-5">
    <div class="col-lg-3 mx-auto">
      <div class="card ">
        <div class="card-header d-flex justify-content-between">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active text-danger" aria-current="page" href="#">Add Todo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./AllTodos.php">All Todo</a>
            </li>
          </ul>
        </div>



        <?php

        if (isset($_GET['dataAdd_msg'])) {
          echo "<h6 class= h6 >"  . htmlspecialchars($_GET['dataAdd_msg']) . "</h6>";
        }

        if (isset($_GET['delete_msg'])) {
          echo "<h6 class= h6 >" . htmlspecialchars($_GET['delete_msg']) . "</h6>";
        }


        ?>


        <!-- //Card Body -->

        <div class="card-body">
          <form method="POST" action="./controller/todoStore.php">
            <input value="<?= $_SESSION['old data']['title'] ?? null ?>" type="text" class="form-control my-3" name="title" placeholder="Enter Your Todo Title">
            <p class="text-danger">
              <?= $_SESSION['errors']['title_error'] ?? null ?> </p>
            <textarea name="detail" class="form-control my-3" id="" placeholder="Enter Your Todo Detail"><?= $_SESSION['old data']['detail'] ?? null ?></textarea>
            <p class="text-danger">
              <?= $_SESSION['errors']['detail_error'] ?? null ?> </p>
            <button class="btn btn-primary rounded-0">Add Todo</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



<?php
session_unset()
>>>>>>> origin/main
?>