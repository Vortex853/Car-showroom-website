<nav class="navbar navbar-inverse navbar-fixed-top bg-blue">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color: white ">M A L I K   C A R S</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
          <?php
          if(isset($_SESSION['is_logged_in']))
          {
           if($_SESSION['is_logged_in']==1)
            {   
                echo "<li><a href='view_wishlist.php' style='color: white'>Wishlist</a></li>";
                echo "<li><a href='view_cart.php' style='color: white'>Cart</a></li>";
                echo "<li><a href='view_order.php' style='color: white'> My Orders</a></li>";
                echo "<li><a href='index.php' style='color: white'>".$_SESSION['name']."</a></li>";
                echo "<li><a href='logout.php' style='color: white'>Logout</a></li>";
            }
          }
          else{

          echo "<li><a href='login_admin.php' style='color: white'>Admin Login</a></li><li><a href='login.php' style='color: white'>Login</a></li><li><a href='register.php' style='color: white'>Register</a></li>";
            }
          ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
