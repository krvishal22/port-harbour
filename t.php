<?php

$Query_username = "vish";
$Query_pswd = "12345";

$userName = $_POST['username'];
$pswd = $_POST['password'];

if(($userName == $Query_username) && ($pswd == $Query_pswd)) {
  header("location:Index.html");
  echo "OK, logged in, good to go.";

} else {
  $message = "Username or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>