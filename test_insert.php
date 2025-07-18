<?php
include 'config.php';

$sql = "INSERT INTO users (username, email, phone, dob, gender, address, password) 
        VALUES ('testuser', 'test@example.com', '1234567890', '1990-01-01', 'male', 'Test Address', 'test123')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
