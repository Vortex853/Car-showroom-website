<?php

include "includes/dbconnect.php";
session_start();
$product_id=$_GET['id'];
$query="SELECT * FROM `products` WHERE `product_id` LIKE '$product_id'";
$row=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($row);
$product_name=$result['product_name'];
$product_price=$result['product_price'];
$product_desc=$result['product_desc'];
$product_image=$result['product_image'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Register for Mlik Cars</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>


  <body background="images/bg.png">

    <?php include "includes/navbar.php";?>
     
     <div class="container m-t-50" style="background-color: white"><br>
     <?php
     
      if(isset($_GET['msg']))
      {
        if($_GET['msg']==1)
        {
          echo "<p style='color:red'>Product added to your Wishlist</p>";
        }
        elseif($_GET['msg']==2)
        {
         echo "<p style='color:red '>Product already in your wishlist</p>";
        }
         elseif($_GET['msg']==3)
        {
         echo "<p style='color:red '>Product added in your cart</p>";
        }
         elseif($_GET['msg']==4)
        {
         echo "<p style='color:red '>Product already in your cart</p>";
        }
        elseif($_GET['msg']==5)
        {
         echo "<p style='color:red '>Product purchased successfuly</p>";
        }

       else
        {
          echo "<p style='color:red'>Please Login or Register for new users
          </p>";
        }
      }
     ?>
       <div class="row">
         <div class="col-md-4" style="background-color: white">
           <img src="images/<?php echo $product_image; ?>" style="width: 80%"; height="350px">
         </div>
         <div class="col-md-4" >
           <h1 style="text-align: top"><?php echo $product_name; ?></h1>
            <h3><?php echo $product_price; ?></h3>
           <p><?php echo $product_desc; ?></p>
           <p class="m-t-50"><a href="add_wishlist.php?id=<?php echo $product_id; ?>" class="btn btn-success bth-lg"> Add to Wish list</a><a href="add_cart.php?id=<?php echo $product_id;?>" class="btn bth-lg btn-danger" style="margin-left: 10px" > Add to cart</a></p>
         </div>
       </div>
     </div>


    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>