<?php
// Create a database connection
$conn = new mysqli("142.93.223.49", "local", "Yahoo@123", "deeksha_db");
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}
?>