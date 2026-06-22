<?php
session_start();
include("config.php");

if(!isset($_SESSION['user_id'])){
    echo 0;
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "
SELECT SUM(quantity) AS total
FROM cart
WHERE user_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$user_id);
$stmt->execute();

$result = $stmt->get_result();

$row = $result->fetch_assoc();

echo $row['total'] ? $row['total'] : 0;
?>