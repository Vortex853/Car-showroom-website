<?php


include "includes/dbconnect.php";
 session_start();

$user_id=$_SESSION['user_id'];
$product_id=$_GET['id'];
//check redundency
$query1= "SELECT * FROM `cart` WHERE `user_id` LIKE '$user_id' AND `product_id` LIKE '$product_id' ";
$result=mysqli_query($conn,$query1);
$num_rows=mysqli_num_rows($result);

if ($num_rows>0) 
	{
		header('location: product_description.php?id='.$product_id.'&msg=4');
	}


	else{


		$query="INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`) VALUES (NULL, '$user_id', '$product_id')";

		if(mysqli_query($conn,$query))
			{
				header('location: product_description.php?id='.$product_id.'&msg=3');
			}

		else
			{
				header('location: product_description.php?id='.$product_id.'&msg=0');
			}
	}
?>