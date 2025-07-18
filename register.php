<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, phone, dob, gender, address, password) 
            VALUES ('$username', '$email', '1234567890', '1990-01-01', 'male', 'Test Address', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.html");
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
