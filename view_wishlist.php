<?php

session_start();

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

   <?php include "includes/navbar.php";   ?>


    <div class="container m-t-50">
   
    <?php
      if(isset($_GET['msg']))
      {
        if($_GET['msg']==1)
        {
          echo '<p style="color:red">Product removed from Wishlist</p>';
        }

       else
        {
          echo '<p style="color:red">Some error occured</p>';
        }
      }
    ?>

      <div class="row">

      <?php
        include "includes/dbconnect.php";
        $user_id=$_SESSION['user_id'];
        $query="SELECT * FROM `wishlist` w JOIN `products` p ON w.`product_id`= p.`product_id` WHERE w.`user_id` LIKE '$user_id'";

        $row=mysqli_query($conn,$query);

        while($result=mysqli_fetch_assoc($row))
        { 
          echo '<div class="col-md-3 col-sm-6 m-b-20"><br>
                  <div class="product_div bg-white">
                      <img class="image_size" src="images/'.$result['product_image'].'">
                        <h4 class="text_center">'.$result['product_name'].'</h4>
                          <p class="p-5"><span class="pull-left">'.$result['product_price'].'</span> <span class="pull-right">Quantity left:18</span></p><br>
                          <a class="btn btn-block btn-danger " href="remove_wishlist.php?id='.$result['product_id'].'"> Remove from Wishlist</a>
                          <a class="btn btn-block btn-success" href="add_cart.php?id='.$result['product_id'].'"> Move to Cart</a>
                  </div>
                </div>';
        }

        ?>


      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>