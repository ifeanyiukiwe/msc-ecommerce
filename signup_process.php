<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

$first = $_POST['first_name'];
$last  = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone = $_POST['phone'];
$dob   = $_POST['dob'];

$sql = "INSERT INTO users
(first_name,last_name,email,password,phone,dob)
VALUES (?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
"ssssss",
$first,$last,$email,$password,$phone,$dob
);

if($stmt->execute()){
    header("Location: login.php");
exit();
}else{
    echo $stmt->error;
}
}
?>