<?php
session_start();
include("../config.php");

if(isset($_SESSION['admin_id'])){
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body class="admin-main">

<div class="login-container">
    <h2>Admin Login</h2>

    <form method="POST" action="login_action.php">

        <input type="email"
               name="email"
               placeholder="Admin Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit">
            Login
        </button>

    </form>
</div>

</body>
</html>