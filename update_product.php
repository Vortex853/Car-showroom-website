<?php
include "includes/dbconnect.php";


$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_desc=$_POST['product_desc'];
$product_id=$_POST['product_id'];


$query="UPDATE `products` SET `product_name`='$product_name',`product_price`='$product_price',`product_desc`='$product_desc' WHERE `product_id` LIKE '$product_id'";

if (mysqli_query($conn,$query)) {

	header('location:admin_profile.php');
}

else
{
	echo "some error occured";
}

?>