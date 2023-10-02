<?php
//$servername = "sql103.byethost7.com";
//$username = "b7_25299625";
//$password = "byet570114";

// Create connection
//$conn = new mysqli($servername, $username, $password);
$conn = new mysqli("sql12.freesqldatabase.com", "sql12624444", "pfqqf9xZTE", "sql12624444");
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>