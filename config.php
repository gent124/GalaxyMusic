<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "galaxy";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed!");
}
?>