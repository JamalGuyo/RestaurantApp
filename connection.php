<?php
// database variables
$host = 'localhost';
$username = 'amin';
$password = 'password';
$db = 'restaurant';

// connect to database
$conn = mysqli_connect($host, $username, $password, $db);

// check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

?>