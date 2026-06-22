<?php
session_start();
include("../config.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$email);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){

    $admin = $result->fetch_assoc();

    if(password_verify($password,$admin['password'])){

        $_SESSION['admin_id'] = $admin['id'];
        header("Location: dashboard.php");
        exit();

    } else {
        echo "Invalid password";
    }

} else {
    echo "Admin not found";
}
?>