<?php
session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Msc Project</title>
</head>
<body class="admin-main">
    
        <div class="dashboard-header">
           
    <h1>Admin Dashboard</h1>

    <div class="dashboard-actions">
        <a href="/home.php">Home</a>
        <a href="orders.php">View Orders</a>
        <a href="logout.php">Logout</a>
    </div>
</div>
    
</body>
</html>

