<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Login to Malik Cars</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>


  <body background="images/bg.png">

    <?php include "includes/navbar.php";?>
     
     <div class="container"><br>
       <h2 style="text-align: center; color: white">Login</h2>
       <div class="row">
         <div class="col-md-offset-3 col-md-6">
           <form action="login_user.php" method="POST" class="form">
             <label style="text-align: center; color: white">Enter E-mail</label><br><input type="email" name="user_email" class="form-control"><br>
             <label style="text-align: center; color: white">Enter Password</label><br><input type="password" name="user_password" class="form-control"><br><br>
             <input type="submit" name="Login" class="btn btn-danger btn-lg ">
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
