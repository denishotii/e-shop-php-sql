<html>
    <head>
    <script src="https://kit.fontawesome.com/46323304fb.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
      
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
      
      
        <!-- Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      
        <!-- Custom StyleSheet -->
        <link rel="stylesheet" href="styles.css" />
      
        <title>I-shop.com</title>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
      </head>
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <body>

    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <a href="index.php" >
              I-shop
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">I-shop</span>
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#header" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="#category" class="nav__link scroll-link">Category</a>
              </li>
              <li class="nav__item">
                <a href="#news" class="nav__link scroll-link">Blog</a>
              </li>
              <li class="nav__item">
                <a href="#contact" class="nav__link scroll-link">Contact</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">
          <?php 
            if(!isset($_SESSION['userName'])){
              ?>
					<a href="signin.php" class="icon__item">
            <span class="icon__user"><i class="fas fa-sign-in-alt"></i></span>
            </a>
				<?php 
			}else{ 
				?>
            <a href="user.php" class="icon__item">
              <svg class="icon__user">
                <use xlink:href="./images/sprite.svg#icon-user"></use>
              </svg>
            </a>
          <?php } ?>
          <form action="search.php" method="POST" id="form" class="icon" style="display: none;">
					      <input style="border: none;width:110px;height:40px;" type="text" placeholder="Search.." name="search" required>
      				  <button class="button1" name="submit-search" type="submit"><i class="fas fa-search"></i></button>
					</form>
            <a href="#" id="search" class="icon__item">
              <svg class="icon__search">
                <use xlink:href="./images/sprite.svg#icon-search"></use>
              </svg>
            </a>
            <?php 
            if(!isset($_SESSION['userName'])){
              ?>
            <a href="signin.php?please_signin" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total">0</span>
            </a>
            <?php }else{ ?>
              <a href="cart.php" class="icon__item">
              <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <?php
                include "db/db.php";
                $uId = $_SESSION['id'];
                $query = "SELECT * FROM cart WHERE uId='$uId'";
                $result = mysqli_query($connect, $query);
                $product = mysqli_num_rows($result);
                // $countP = count($product)
              ?>
              <span id="cart__total"><?php echo $product ?></span>
            </a>
            <?php } ?>
          </div>
        </nav>
      </div>
    </div>
    <script src="./js/index.js"></script>
    <script>
    $(document).ready(function()
				{
					$('#search').click(function() 
					{
						$('#form').css({'display':'inline'});
					});
          $('#search').dblclick(function() 
					{
						$('#form').css({'display':'none'});
					});
          $('#form').submit(function()		
					{
						$(this).css({'display':'none'});
					});
				});
    </script>
</body>
    </html>