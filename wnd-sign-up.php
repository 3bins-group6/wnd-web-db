<?php include('wnd-sign-in-up-config.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="sign-in-out.css" type="text/css" />
  <title>Sign Up | Wheels n' Deals</title>
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
            <a class="navbar_logo" href="Wheels n' Deals.php">
              <img src="logo/wnd_logo.png" height="50px" width="50px" />
            </a>
          </div>
          <li><a href="Wheels n' Deals.php">Home</a></li>
          <li class="shop-page">
            <a href="shop.php">Shop</a>
            <!-- DROPDOWN PRIMARY MENU -->
            <ul class="shop-dropdown">
              <li><a href="services.php">Services</a></li>
              <li><a href="finance.php">Finance</a></li>
            </ul>
          </li>
          <li><a href="about.php">About Us</a></li>
        </div>
        <div class="secondary-menu">
          <li><a href="wnd-sign-in.php">Login</a></li>
          <li><a class="active" href="wnd-sign-up.php">Sign Up</a></li>
        </div>
      </div>
    </ul>
  </nav>
  <!--START CONTAINER FOR SIGN-IN AND SIGN-UP-->
  <div id="form" class="form-container">
    <div id="signup-form" class="user-admin">
      <!--LEFT SIDE FOR GRADIENT DESIGN WITH LOGO-->
      <section id="signup-form-left">
        <div id="form-logo" class="signup-form-logo">
          <div id="logobg-img" class="text-title">
            <h3>Good cars get you from point A to point B</h3>
            <div id="logo-img" class="margintop30">
              <a href="Wheels-n-Deals.php"><img src="logo/gray-wnd-logo.png" class="circle-logo" width="100px" /></a>
            </div>
          </div>
        </div>
      </section>


      <!--RIGHT SIDE FOR INPUT VALUES OF SIGN-IN AND SIGN-UP-->
      <aside id="sidebar-right" class="position-relative">
        <div id="signup-form-right" class="signup-form pad30">
          <h2 class="margintop50">Sign up for free!</h2>
          
          <!--FOR INPUT VALUES-->
          <form method="post" action="wnd-sign-up.php">
            
            
            <div class="input-group">
              <label>Username</label>
              <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
              <label>Email</label>
              <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
              <label>Password</label>
              <input type="password" name="password_1">
            </div>
            <div class="input-group">
              <label>Confirm password</label>
              <input type="password" name="password_2">
            </div>
            <?php include('wnd-sign-in-up-config-errors.php'); ?>
            
            <div class="input-group">
              <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            
          </form>

        </div>

        <div id="signup" class="lbl-margintop100">
          <p class="ask-smalltxt">Already a member?
            <a href="wnd-sign-in.php" class="goto-login-page">Login</a>
          </p>
        </div>

      </aside>
    </div>
  </div>
  <!--END CONTAINER FOR SIGN-IN AND SIGN-UP-->
</body>

</html>