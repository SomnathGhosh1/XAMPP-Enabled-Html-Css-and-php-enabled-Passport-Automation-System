<?php
include 'config.php';

$app_number = $_GET['app_number'];

$sql = "SELECT status FROM applications WHERE passport_number = '$app_number'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["status" => "Not Found"]);
}
$conn->close();
?>
