<?php


$DB_Name = "Rahed Hossen";
$DB_Password = "Password";


$IncomingName = $_GET["Name"];
$IncomingPassword = $_GET["Password"];
$IncomingNumber = $_GET["Number"];

if ($IncomingName == $DB_Name) {

  if ($DB_Password == $IncomingPassword) {
    echo "Success";
    echo "<br>";
    if ($DB_Name == $IncomingName && $DB_Password == $IncomingPassword) {
      for ($i = 1; $i <= 10; $i++) {
        echo "$IncomingNumber * $i" . "=" . $IncomingNumber * $i . "<br>";
      }
    }
  } else {
    echo "Please Enter Your Password";
  }
} else {
  echo "Please Enter Your Name";
}
