<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db"; // Make sure to create this in phpMyAdmin!

// Create connection using Object-Oriented MySQLi
$conn = new mysqli ($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // Uncomment to test
?>