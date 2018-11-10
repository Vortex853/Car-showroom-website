<?php

session_start();
?>

 <!DOCTYPE html>
<html lang="en">
  <head>

    <title>Bikers Junction</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>


  <body background="images/bg.png">

   <?php include "includes/admin_navbar.php";
   ?>


    <div class="container m-t-50"><br>
       <h2 style="text-align: center; color: white">Add a product</h2>
       <div class="row">
         <div class="col-md-offset-3 col-md-6 bg-white">
           <form action="add_product.php" method="POST" enctype="multipart/form-data" class="form">
             <label>Product Name</label><br><input type="text" name="product_name" class="form-control"><br>
             <label>Product Price</label><br><input type="number" name="product_price" class="form-control"><br>
             <label>Product Description</label><br><textarea name="product_desc" class="form-control"></textarea><br>
             <label>Product Image</label><br><input type="file" name="product_image" class="form-control"><br>
             <input type="submit" name="Add Product" class="btn btn-success btn-lg btn-block">
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