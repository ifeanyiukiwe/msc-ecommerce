<?php  
session_start();
include("../config.php");

if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
    exit();
}

$order_id = $_GET['id'];

$sql = "
SELECT 
product_name,
price,
quantity
FROM order_items
WHERE order_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$order_id);
$stmt->execute();

$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<h2>Order #<?php echo $order_id; ?> Details</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>
    <td><?php echo $row['product_name']; ?></td>
    <td>£<?php echo number_format($row['price'],2); ?></td>
    <td><?php echo $row['quantity']; ?></td>
</tr>

<?php } ?>

</table>

<br>
<a href="orders.php">Back</a>

</body>
</html>