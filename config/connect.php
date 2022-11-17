<?php
$mysqli = new mysqli("localhost","host","","basic-php");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>