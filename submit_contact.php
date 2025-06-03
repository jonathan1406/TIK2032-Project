<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $message);
mysqli_stmt_execute($stmt);

echo "Thank you for contacting me!";
?>
