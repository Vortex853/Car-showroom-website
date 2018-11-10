<?php


include "includes/dbconnect.php";
 session_start();

$user_id=$_SESSION['user_id'];
$product_id=$_GET['id'];
$query="INSERT INTO `orders` (`order_id`, `user_id`, `product_id`) VALUES (NULL, '$user_id', '$product_id')";

		if(mysqli_query($conn,$query))
			{
				header('location: product_description.php?id='.$product_id.'&msg=5');
			}

		else
			{
				header('location: product_description.php?id='.$product_id.'&msg=0');
			}
	
?>