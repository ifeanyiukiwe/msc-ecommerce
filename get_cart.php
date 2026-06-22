<?php
session_start();
include("config.php");

$user_id = $_SESSION['user_id'];

$sql = "
SELECT cart.id,
products.name,
products.price,
products.image,
cart.quantity
FROM cart
JOIN products
ON cart.product_id = products.id
WHERE cart.user_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$user_id);
$stmt->execute();

$result = $stmt->get_result();

$cart = [];

while($row = $result->fetch_assoc()){
$cart[] = $row;
}

echo json_encode($cart);
?>