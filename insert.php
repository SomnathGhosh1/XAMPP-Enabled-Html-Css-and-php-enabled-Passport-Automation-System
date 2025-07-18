<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['t1'];
    $password = password_hash($_POST['t2'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, phone, dob, gender, address, password) 
            VALUES ('$username', 'test@example.com', '1234567890', '1990-01-01', 'male', 'Address Here', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: login.html");
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
