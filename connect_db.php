<?php
$servername = "localhost";
$username = "jaturaphum";
$password = "0639352410";
$db_name = "jaturaphum";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>