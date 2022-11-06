<?php include('wnd-sign-in-up-config.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="sign-in-out.css" type="text/css" />
  <title>Login | Wheels n' Deals</title>
  <link rel="icon" href="logo/white-wnd-icon.png">
  <script src="https://kit.fontawesome.com/ec4ce7b9c2.js" crossorigin="anonymous"></script>
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
          <li><a href="Wheels-n-Deals.php">Home</a></li>
          <li class="shop-page"><a href="shop.php">Shop</a>
            <!-- DROPDOWN PRIMARY MENU -->
            <ul class="shop-dropdown">
              <li><a href="services.php">Services</a></li>
              <li><a href="finance.php">Finance</a></li>
            </ul>
          </li>
          <li><a href="about.php">About Us</a></li>
        </div>
        <div class="secondary-menu">
          <li><a class="active" href="wnd-sign-in.php">Login</a></li>
          <li><a href="wnd-sign-up.php">Sign Up</a></li>
        </div>
      </div>
    </ul>
  </nav>

  <!--START CONTAINER FOR SIGN-IN AND SIGN-UP-->
  <div id="form" class="form-container">
    <div id="signup-form" class="user-admin">
      <!--FOR GRADIENT DESIGN WITH LOGO-->
      <section id="signup-form-left">
        <div id="form-logo" class="signup-form-logo">
          <div id="logobg-img" class="text-title">
            <h3>A car for every purse and Purpose</h3>
            <div id="logo-img" class="margintop30">
              <a href="Wheels-n-Deals.php">
                <img src="logo/gray-wnd-logo.png" class="circle-logo" width="100px" /></a>
            </div>
          </div>
        </div>
      </section>
      <!--RIGHT SIDE FOR INPUT VALUES OF SIGN-IN AND SIGN-UP-->
      <aside id="sidebar-right" class="position-relative">
        <div id="login-form" class="signin-form pad30">
          <h2 class="bold h3 margintop50">Welcome Back!</h2>

          <form method="post" action="wnd-sign-in.php" >
            
            <div class="input-group" style>
              <label>Username</label>
              <input type="text" name="username">
            </div>
            <div class="input-group">
              <label>Password</label>
              <input type="password" name="password">
            </div>
            <?php include('wnd-sign-in-up-config-errors.php'); ?>

            <div class="input-group">
              <button type="submit" class="btn" name="login_user">Login</button>
            </div>

          </form>
        </div>

        <div id="signup" class="goto-signup">
          <p class="ask-smalltxt">Not yet a member? <a href="wnd-sign-up.php">Sign up</a></p>
        </div>

      </aside>
      <!--RIGHT SIDE FOR INPUT VALUES OF SIGN-IN AND SIGN-UP-->
    </div>
  </div>
  <!--END CONTAINER FOR SIGN-IN AND SIGN-UP-->
</body>

</html>