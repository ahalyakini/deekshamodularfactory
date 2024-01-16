<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


include("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email format.";
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO contact_data (fname, lname, email, phone, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fname, $lname, $email, $phone, $message);

    if ($stmt->execute()) {
        http_response_code(200);
        echo "We will contact you soon.";
    } else {
        http_response_code(500);
        echo "Error: Unable to insert data into the database.";
    }

    $stmt->close();
} else {
    http_response_code(405);
    echo "Method not allowed.";
}

$conn->close();
?>