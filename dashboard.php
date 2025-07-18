<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <ul>
        <li><a href="formfilling.html">Fill Passport Form</a></li>
        <li><a href="fileupload.html">Upload Documents</a></li>
        <li><a href="payment.html">Make Payment</a></li>
        <li><a href="status.html">Check Status</a></li>
        <li><a href="download.html">Download Passport</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
