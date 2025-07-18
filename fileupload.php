<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["document"])) {
    $user_id = $_SESSION['user_id'];
    $document_name = $_FILES["document"]["name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["document"]["name"]);

    if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO documents (user_id, document_name, file_path) 
                VALUES ('$user_id', '$document_name', '$target_file')";
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded!";
            header("Location: payment.html");
        } else {
            echo "Database error: " . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }
}
$conn->close();
?>
