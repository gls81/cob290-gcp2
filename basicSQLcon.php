<?php
// Set error display
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "COB290 Database Connection Test";


$servername = "localhost";
$username = "test";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Failed"
}
echo "Connected successfully!!";
?>
