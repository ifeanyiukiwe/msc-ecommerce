<?php
session_start();
include("../config.php");

if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
    exit();
}

/* GET ALL ORDERS WITH CUSTOMER INFO */
$sql = "
SELECT orders.id,
       orders.total,
       orders.status,
       users.email
FROM orders
JOIN users
ON orders.user_id = users.id
ORDER BY orders.id DESC
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Orders</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="dashboard-container">
<h1>Orders Management</h1>
</div>

<table border="1" cellpadding="10">
    <tr>
        <th>Order ID</th>
        <th>Customer</th>
        <th>Total (£)</th>
        <th>Status</th>
        <th>Date</th>
        <th>Actions</th>
    </tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>
    <td>
<?php
$status = strtolower($row['status']);
echo "<span class='status status-$status'>{$row['status']}</span>";
?>
</td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo number_format($row['total'],2); ?></td>
    <td><?php echo $row['status']; ?></td>
    
    <td>

        <a class="btn btn-view" href="order_details.php?id=<?php echo $row['id']; ?>">View</a>

        <?php if($row['status'] != "Cancelled") { ?>
        |
       <a class="btn btn-cancel" href="update_order.php?id=<?php echo $row['id']; ?>&status=Cancelled">Cancel</a>
        <?php } ?>

        <?php if($row['status'] == "Pending") { ?>
        |
        <a class="btn btn-complete" href="update_order.php?id=<?php echo $row['id']; ?>&status=Completed">Complete</a>
        <?php } ?>

    </td>
</tr>

<?php } ?>

</table>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>