<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: wnd-sign-in.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: wnd-sign-in.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" type="text/css" />
    <title>Home | Wheels n' Deals</title>
    <link rel="icon" href="logo/white-wnd-icon.png">
    <script src="https://kit.fontawesome.com/ec4ce7b9c2.js" 
    crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar">
      <!-- NAVIGATION MENU -->
      <ul class="nav-links">
        <!-- PRIMARY MENUS -->
        <div class="menu">
          <div class="primary-menu">
            <!-- LOGO -->
            <div class="logo">
              <a class="navbar_logo" href="Wheels-n-Deals.php">
                <img src="logo/wnd_logo.png" height="50px" width="50px" />
              </a>
            </div>
            <li><a class="active" href="Wheels-n-Deals.php">Home</a></li>
            <li class="shop-page">
              <a href="shop.html">Shop</a>
              <!-- DROPDOWN PRIMARY MENU -->
              <ul class="shop-dropdown">
                <li><a href="services.html">Services</a></li>
                <li><a href="finance.html">Finance</a></li>
              </ul>
            </li>
            <li><a href="about.html">About Us</a></li>
          </div>
          <div class="secondary-menu">
            <li><a href="wnd-sign-in.php">Login</a></li>
            <li><a href="wnd-sign-up.php">Sign Up</a></li>
          </div>
        </div>
      </ul>
    </nav>

    <div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="Wheels-n-Deals.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

  </body>


  <footer>
    <div class="media_icons">
      <div class="socials_container">
        <p>Follow us on:</p>
        <div class="footer_icons">
          <a href="https://facebook.com" target="_blank"
            ><i class="fa-brands fa-facebook"></i
          ></a>
          <a href="https://instagram.com" target="_blank"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="https://twitter.com" target="_blank"
            ><i class="fa-brands fa-twitter"></i
          ></a>
          <a href="https://youtube.com" target="_blank"
            ><i class="fa-brands fa-youtube"></i
          ></a>
        </div>
      </div>
    </div>
  </footer>
 
</html>
