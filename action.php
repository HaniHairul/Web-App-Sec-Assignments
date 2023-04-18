<?php
include("auth_session.php");

$nameRegex = "/^(?=.{1,40}$)[a-zA-Z]+(?:[-'\s][a-zA-Z]+)*$/";
$currentAddressRegex = "/^[A-Za-z0-9 ]+$/";
$homeAddressRegex = "/^[A-Za-z0-9 ]+$/";
$matricnoRegex = "/^[0-9]{7}/";
$mobilePhoneRegex = "/^[0-9]{10,11}/";
$homePhoneRegex = "/^[0-9]{9,10}/";

$error = array();
$nameError = "";
$matricnoError = "";
$currentAddressError = "";
$homeAddressError = "";
$emailError = "";
$mobilePhoneError = "";
$homePhoneError = "";

if (!preg_match($nameRegex, $_POST["name"])) {
  $nameError = "Please enter a valid name that consists only letters and spaces.";
  array_push($error, $nameError);
}
if (!preg_match($matricnoRegex, $_POST["matricno"])) {
  $matricnoError = "Please enter a valid matric number (only 7 digits allowed).";
  array_push($error, $matricnoError);
}
if (!preg_match($currentAddressRegex, $_POST["currentAddress"])) {
  $currentAddressError = "Please enter your current address without any special characters.";
  array_push($error, $currentAddressError);
}
if (!preg_match($homeAddressRegex, $_POST["homeAddress"])) {
  $homeAddressError = "Please enter your home address without any special characters.";
  array_push($error, $homeAddressError);
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || !strpos($_POST["email"], "@gmail.com")) {
  $emailError = "Please enter a valid Gmail account.";
  array_push($error, $emailError);
}
if (!preg_match($mobilePhoneRegex, $_POST["mobilePhone"])) {
  $mobilePhoneError = "Please enter a valid 10/11-digit mobile phone number.";
  array_push($error, $mobilePhoneError);
}
if (!preg_match($homePhoneRegex, $_POST["homePhone"])) {
  $homePhoneError = "Please enter a valid 9/10-digit home phone number.";
  array_push($error, $homePhoneError);
}

if (count($error) == 0){
    echo "Name: " .  $_POST["name"]; "<br>";
    echo "Matric No: " . $_POST["matricno"]; "<br>";
    echo "Current Address: " .  $_POST["currentAddress"]; "<br>";
    echo "Home Address: " . $_POST["homeAddress"] ;"<br>";
    echo "Email (Gmail account only): " . $_POST["email"]; "<br>";
    echo "Mobile Phone No: " . $_POST["mobilePhone"]; "<br>";
    echo "Home Phone No: " . $_POST["homePhone"];
}

else{
    foreach ($error as $errors) {
      echo "$errors <br>";
        
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <div class="form">
        <p><a href="logout.php">Logout</a></p> 
    </div> 
</body>
</html>