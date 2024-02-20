<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB_Name = "money_transfer_system";

// Create connection
  $conn = new mysqli($servername, $username, $password, $DB_Name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";


?>