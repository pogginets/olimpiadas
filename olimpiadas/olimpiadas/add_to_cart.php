<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$product_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO cart (user_id, product_id) VALUES ('$user_id', '$product_id')";
if ($conn->query($sql) === TRUE) {
    header("Location: cart.php");
} else {
    echo "Error: " . $conn->error;
}
?>
