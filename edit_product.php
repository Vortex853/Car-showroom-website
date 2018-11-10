<?php

session_start();
include "includes/dbconnect.php";
$product_id=$_GET['id'];
$query="SELECT * FROM `products` WHERE `product_id` LIKE '$product_id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

$product_name=$row['product_name'];
$product_price=$row['product_price'];
$product_desc=$row['product_desc'];
?>

 <!DOCTYPE html>
<html lang="en">
  <head>

    <title>Cars Junction</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>


  <body background="images/bg.png">

   <?php include "includes/admin_navbar.php";
   ?>


    <div class="container m-t-50"><br>
       <h2 style="text-align: center">Edit Product</h2>
       <div class="row">
         <div class="col-md-offset-3 col-md-6 bg-white">
           <form action="update_product.php" method="POST" class="form">
             <label>Product Name</label><br><input type="text" name="product_name" value="<?php echo $product_name;?>" class="form-control"><br>
             <label>Product Price</label><br><input type="number" name="product_price" value="<?php echo $product_price;?>" class="form-control"><br>
             <label>Product Description</label><br><textarea name="product_desc" class="form-control"><?php echo $product_name;?></textarea><br>
             <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" name="">
             <input type="submit" name="Save Changes" class="btn btn-success btn-lg">
           </form>
         </div>
       </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>