<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Register for Malik cars</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>


  <body background="images/bg.png">

    <?php include "includes/navbar.php";?>
     
     <div class="container"><br>
       <h2 style="text-align: center ;color:white">Register for Malik Cars</h2>
       <div class="row">
         <div class="col-md-offset-3 col-md-6">
           <form action="register_user.php" method="POST" class="form">
             <label style="color:white">Enter Name</label><br><input type="text" name="user_name" class="form-control"><br>
             <label style="color:white">Enter E-mail</label><br><input type="email" name="user_email" class="form-control"><br>
             <label style="color:white">Enter Password</label><br><input type="password" name="user_password" class="form-control"><br>
             <label style="color:white">Confirm Password</label><br><input type="password" name="con_password" class="form-control"><br>
             <label style="color:white">Enter Phone No</label><br><input type="text" name="phno" class="form-control"><br>
             <label style="color:white">Enter Address</label><br><textarea type="text" name="Address" class="form-control"></textarea><br><br>
             <input type="submit" name="Register Me" class="btn btn-danger btn-lg ">
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