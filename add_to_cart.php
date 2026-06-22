<?php
session_start();
include("config.php");

if(!isset($_SESSION['user_id'])){
    echo "login_required";
    exit();
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];

/*I wrote this function for checking if product is already in cart */

$sql = "SELECT * FROM cart
        WHERE user_id=? AND product_id=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii",$user_id,$product_id);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){

    /*I wrote this function for increasing product quantity */
    $update =
    "UPDATE cart
     SET quantity = quantity + 1
     WHERE user_id=? AND product_id=?";

    $stmt = $conn->prepare($update);
    $stmt->bind_param("ii",$user_id,$product_id);
    $stmt->execute();

}else{

    /*I wrote this function for adding new products */
    $insert =
    "INSERT INTO cart(user_id,product_id)
     VALUES(?,?)";

    $stmt = $conn->prepare($insert);
    $stmt->bind_param("ii",$user_id,$product_id);
    $stmt->execute();
}

echo "added";
?>