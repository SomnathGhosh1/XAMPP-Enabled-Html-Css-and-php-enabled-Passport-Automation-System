<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$host = "localhost";
$dbname = "passportfinal";
$username = "root"; // Default XAMPP user
$password = ""; // Default XAMPP password (empty)

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
