<?php
 session_start();

include "includes/dbconnect.php";


$user_id=$_SESSION['user_id'];
$product_id=$_GET['id'];

$query="DELETE FROM `cars`.`wishlist` WHERE `user_id`='$user_id' AND `product_id`='$product_id'";

if (mysqli_query($conn,$query)) {

	header('location: view_wishlist.php?msg=1');
}
else{

	header('location: view_wishlist.php?msg=2');
}



?>