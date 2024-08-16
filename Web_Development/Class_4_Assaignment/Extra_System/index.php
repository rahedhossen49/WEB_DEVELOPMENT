<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Youtube Thumbnail Viewer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class=" row">
      <div class="col-lg-6 mx-auto shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <h3 class="text-center text-bg-primary p-3 rounded">Youtube Video Thumbnail Viewer</h3>
        <form action="./api.php" method="POST" class="p-3">
          <label for="url" class="form-label">URL: </label>
          <input type="text" class="form-control" name="url" id="url" placeholder="Enter Youtube Video URL Here">
          <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>