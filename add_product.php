<?php
include "includes/dbconnect.php";
$file_name=$_FILES['product_image']['name'];
$file_size=$_FILES['product_image']['size'];
$file_type=$_FILES['product_image']['type'];
$tmp_name=$_FILES['product_image']['tmp_name'];

$position=strpos($file_name,".");
$extension=substr($file_name,$position+1);

if ($extension=="jpg" or $extension=="png") {


		if(move_uploaded_file($tmp_name,"./images/".$file_name))
		{
			$product_name=$_POST['product_name'];
			$product_price=$_POST['product_price'];
			$product_desc=$_POST['product_desc'];
			$product_image=$file_name;

			$query="INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_image`, `product_price`) VALUES (NULL, '$product_name', '$product_desc', '$product_image', '$product_price')";

			if (mysqli_query($conn,$query)) 
			{	
				echo "Product Added";
				header('location: upload_product.php');

			}
			else
			{
				echo "Product not Added";
			}
		}

	
}

else{ echo "Product image should only be '.jpg' or '.png'";}

?>