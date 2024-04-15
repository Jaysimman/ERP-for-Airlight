<?
  // Create connection
  $conn = new mysqli("localhost", "jaysimman", "12321", "Admin");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "connection  success";