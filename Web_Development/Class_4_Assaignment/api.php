<?php
function getYouTubeThumbnail($URL)
{
  $URL_1 = stripos($URL, '?v=');
  $URL_2 = stripos($URL, '.be/');

  if ($URL_1 !== false) {
    $video_id = explode("?v=", $URL);
    $yt_id = $video_id[1];
    $main_id = substr($yt_id, 0, 11);

    $thumbnail = "http://img.youtube.com/vi/" . $main_id . "/maxresdefault.jpg";

    echo "<img src='$thumbnail' alt='YouTube Thumbnail'>";
  } else if ($URL_2 !== false) {
    $video_id = explode(".be/", $URL);
    $yt_id = $video_id[1];
    $main_id = substr($yt_id, 0, 11);
    $thumbnail = "http://img.youtube.com/vi/" . $main_id . "/maxresdefault.jpg";
    echo "<img src='$thumbnail' alt='YouTube Thumbnail'>";
  } else {
    echo "Your URL failed! Try again.";
  }
  return $thumbnail;
}
$URL = $_POST["URL"];
getYouTubeThumbnail($URL);
