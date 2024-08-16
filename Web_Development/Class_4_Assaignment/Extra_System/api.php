<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thumbnail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  $video_url = $_POST["url"];
  if (str_contains($video_url, "si=")) {
    $str = explode(".be/", $video_url);
    $video_id = explode("?", $str[1])[0] ?? "";
  } else if (str_contains($video_url, "v=")) {
    $video_id = explode("=", $video_url)[1] ?? "";
  } else {
    $video_id = "";
  }

  if ($video_id && strlen($video_id) == 11) {
    $thumbnail_url = "https://i1.ytimg.com/vi/$video_id/maxresdefault.jpg";
    echo "
        <div class='container text-center mt-5'>
            <div class='row'>
                <div class='col-8 mx-auto shadow-lg p-3 mb-5 bg-body-tertiary rounded'>
                    <h4 class='text-center p-3 text-bg-primary rounded'>Your Youtube Video Thumbnail</h4>
                    <img src=$thumbnail_url class='img-fluid rounded' />
                    <a href=$video_url target='_blank'>Click Here To Watch The Video</a>
                </div>
            </div>
        </div>
        ";
  } else {
    echo "<h3 class='text-center p-3 text-bg-danger'>Invalid Video URL Provided!</h3>";
  }
  ?>
</body>

</html>