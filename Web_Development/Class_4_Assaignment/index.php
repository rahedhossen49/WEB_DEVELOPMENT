<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouTube Thumbnail Fetcher</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .custom-form {
      max-width: 600px;
      margin: 0;
    }

    .custom-input {
      max-width: 80%;
    }

    .custom-button {
      width: 80%;
    }

    h1 {
      color: red;
    }
  </style>
</head>

<body>
  <section class="">
    <div class="row">
      <div class="col-lg-6 shadow mt-2">
        <div class="container custom-form">
          <h1 class="mb-4">YouTube Thumbnail Take Out</h1>
          <form action="api.php" method="post" class="bg-light p-4 rounded">
            <div class="mb-3">
              <label for="youtube-url" class="form-label">Enter YouTube URL</label>
              <input type="text" id="youtube-url" class="form-control custom-input" placeholder="Enter YouTube URL" name="URL" required>
            </div>
            <button type="submit" name="submit" class="btn btn-danger custom-button">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>