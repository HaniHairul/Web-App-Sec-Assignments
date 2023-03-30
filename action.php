<?php

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
  array_push($errors, $nameError);
}
if (!preg_match($matricnoRegex, $_POST["matricno"])) {
  $matricnoError = "Please enter a valid matric number (only 7 digits allowed).";
  array_push($errors, $matricnoError);
}
if (!preg_match($currentAddressRegex, $_POST["currentAddress"])) {
  $currentAddressError = "Please enter your current address without any special characters.";
  array_push($errors, $currentAddressError);
}
if (!preg_match(homeAddress, $_POST["homeAddress"])) {
  $homeAddressError = "Please enter your home address without any special characters.";
  array_push($errors, $homeAddressError);
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || !strpos($_POST["email"], "@gmail.com")) {
  $emailError = "Please enter a valid Gmail account.";
  array_push($errors, $emailError);
}
if (!preg_match($mobilePhoneRegex, $_POST["mobilePhone"])) {
  $mobilePhoneError = "Please enter a valid 10/11-digit mobile phone number.";
  array_push($errors, $mobilePhoneError);
}
if (!preg_match($homePhoneRegex, $_POST["homePhone"])) {
  $homePhoneError = "Please enter a valid 9/10-digit home phone number.";
  array_push($errors, $homePhoneError);
}

if (count($error) == 0){
    echo "Name: " .  $_POST["name"];
    echo "Matric No: " . $_POST["matricno"];
    echo "Current Address: " .  $_POST["currentAddress"];
    echo "Home Address: " . $_POST["homeAddress"];
    echo "Email (Gmail account only): " . $_POST["email"];
    echo "Mobile Phone No: " . $_POST["mobilePhone"];
    echo "Home Phone No: " . $_POST["homePhone"];
}

else{
    foreach ($error as $errors) {
        echo "$errors <br>";
}
}
?>