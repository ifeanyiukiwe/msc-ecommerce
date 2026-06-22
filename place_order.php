<?php
session_start();
include("config.php");

if(!isset($_SESSION['user_id'])){
    echo "Login required";
    exit();
}

$user_id = $_SESSION['user_id'];


/* GET CART WITH PRODUCT DETAILS */
$sql = "
SELECT 
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

$total = 0;
$items = [];

while($row = $result->fetch_assoc()){
    $total += $row['price'] * $row['quantity'];
    $items[] = $row;
}

if(count($items) === 0){
    echo "Cart empty";
    exit();
}


/* CREATE ORDER */
$order_sql =
"INSERT INTO orders (user_id,total)
VALUES (?,?)";

$order_stmt = $conn->prepare($order_sql);
$order_stmt->bind_param("id",$user_id,$total);
$order_stmt->execute();

$order_id = $conn->insert_id;


/* Inserrting order items into the order_item table in the sql */
foreach($items as $item){

$item_sql =
"INSERT INTO order_items
(order_id,product_name,price,image,quantity)
VALUES (?,?,?,?,?)";

$stmt2 = $conn->prepare($item_sql);

$stmt2->bind_param(
"isdsi",
$order_id,
$item['name'],
$item['price'],
$item['image'],
$item['quantity']
);

$stmt2->execute();
}


/* CLEAR CART */
$clear = $conn->prepare(
"DELETE FROM cart WHERE user_id=?"
);

$clear->bind_param("i",$user_id);
$clear->execute();


echo "Order placed successfully";
?>