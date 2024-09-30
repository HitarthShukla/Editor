<?php
$servername = "localhost";
$username = "root"; 
$password = ""; // Ensure this is the correct password
$dbname = "userinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure the correct character set
$conn->set_charset("utf8mb4");
?>
