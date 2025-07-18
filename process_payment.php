<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO payments (user_id, amount, payment_method, payment_status) 
            VALUES ('$user_id', '$amount', '$payment_method', 'completed')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment successful!";
        header("Location: download.html");
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
