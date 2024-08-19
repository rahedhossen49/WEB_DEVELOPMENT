
<?php
session_start();
$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$ctaTilte = $_REQUEST['ctaTitle'];
$ctaLink = $_REQUEST['ctaLink'];
$videoLink = $_REQUEST['videoLink'];
$bannerImage = $_FILES['BannerImage'];
$extension = pathinfo($bannerImage['name'])['extension'] ?? null;

$acceptedExtension = ['jpg', 'png'];

$errors = [];






//validation


if (empty($title)) {
  $errors['title_error'] = "Title is Missing";
}


if (empty($detail)) {
  $errors['detail_error'] = "Detail is Missing";
}




if ($bannerImage['size'] == 0) {
  $errors['bannerImage_error'] = "Banner Image Is Missing";
} elseif (!in_array($extension, $acceptedExtension)) {
  $errors['bannerImage_error'] = "$extension is not acceptable! acceptable" . join(',', $acceptedExtension);
}


if (count($errors) > 0) {
  $_SESSION['errors'] = $errors;
  header('Location: ../dashboard/banner.php');
} else {
  $fileName = 'Banner-' . uniqid() . '.' . $extension;
  move_uploaded_file($bannerImage['tmp_name'], '../Uploads/' . $fileName);
  $UploadPath = "Uploads/$fileName";
  include('../database/env.php');
  $query = "INSERT INTO `banners`( `title`, `detail`, `cta_link`, `cta_title`, `video_link`, `banner_img`) VALUES ('$title','$detail','$ctaTilte','$ctaLink', '$videoLink', '$UploadPath' )";

  $res = mysqli_query($connection, $query);

  if ($res) {
    $_SESSION['auth']['title'] = $title;
    $_SESSION['auth']['detail'] = $detail;
    $_SESSION['auth']['cta_link'] = $ctaLink;
    $_SESSION['auth']['cta_title'] = $ctaTilte;
    $_SESSION['auth']['video_link'] = $videoLink;
    $_SESSION['success'] = true;
    if ($ProfileImage['size'] > 0) {
      $_SESSION['auth']['profile'] = "Uploads/$fileName";
    }
    header('Location: ../dashboard/Profile.php');
  }
}



?>