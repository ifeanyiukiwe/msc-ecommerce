<?php
session_start();
include("../config.php");

if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
    exit();
}

$order_id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE orders SET status=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si",$status,$order_id);
$stmt->execute();

header("Location: orders.php");
exit();
?>