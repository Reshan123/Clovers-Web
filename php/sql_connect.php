<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sql-system";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "<br><br><br><br><br><br><h1>Connected successfully</h1>";
?>