<?php
session_start();
include("config.php");

$id = $_POST['id'];
$action = $_POST['action'];

if($action == "increase"){
    $sql = "UPDATE cart SET quantity = quantity + 1 WHERE id=?";
}

elseif($action == "decrease"){
    $sql = "UPDATE cart SET quantity = quantity - 1 WHERE id=? AND quantity > 1";
}

elseif($action == "delete"){
    $sql = "DELETE FROM cart WHERE id=?";
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();

echo "success";
?>