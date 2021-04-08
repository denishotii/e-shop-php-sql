<?php 
  session_start();
  if(isset($_SESSION['userName'])){
    header("Location: index.php?error=user_already_signed_in");
}else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/signup.css" />
    <title>I-shop | Sign in & Sign up</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="inc/login.inc.php" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username or Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" />
            <p class="social-text">Go Back</p>
            <div class="social-media">
              <a href="index.php" class="social-icon">
                <i class="fas fa-long-arrow-alt-left"></i>
              </a>
            </div>
          </form>
          <form action="inc/signup.inc.php" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="usernamesp" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="emailsp" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="passwordsp" placeholder="Password" />
            </div>
            <input type="submit" class="btn" name="signup" value="Sign up" />
            <p class="social-text">Go Back</p>
            <div class="social-media">
              <a href="index.php" class="social-icon">
                <i class="fas fa-long-arrow-alt-left"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Are you ready to create your account, and to be ready to surf on our products and to buy them!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="file/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Sign in with your account.<br>
              Please after you create new account confirm your email!<br>
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="file/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <?php } ?>
    <script src="js/app.js"></script>
  </body>
</html>
