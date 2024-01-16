<?php
//Create a database connection
$conn = new mysqli("142.93.223.49", "local", "Yahoo@123", "deeksha_db");
if ($conn->connect_error) {
 die("Database connection failed: " . $conn->connect_error);
}

//Create a database connection
// $conn = new mysqli("localhost", "root", "123456", "deeksha_db1");
// if ($conn->connect_error) {
//   die("Database connection failed: " . $conn->connect_error);
// }


?>