<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
      
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
      
      
        <!-- Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
      ">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      
        <!-- Custom StyleSheet -->
        <link rel="stylesheet" href="styles.css" />
      
        <title>Phone Shop</title>
      </head>
      <body>
    </body>

    <footer id="footer" class="section footer">
        <div class="container">
          <div class="footer__top">
            <div class="footer-top__box">
              <h3>EXTRAS</h3>
              <a href="#">Brands</a>
              <a href="#">Gift Certificates</a>
              <a href="#">Affiliate</a>
              <a href="#">Specials</a>
              <a href="#">Site Map</a>
            </div>
            <div class="footer-top__box">
              <h3>INFORMATION</h3>
              <a href="#">About Us</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Terms & Conditions</a>
              <a href="#">Contact Us</a>
              <a href="#">Site Map</a>
            </div>
            <?php 
               if(!isset($_SESSION['userName'])){
            ?>
            <div class="footer-top__box">
              <h3>MY ACCOUNT</h3>
              <a href="signin.php?please_signin">My Account</a>
              <a href="signin.php?please_signin">Order History</a>
              <a href="signin.php?please_signin">Wish List</a>
              <a href="signin.php?please_signin">Newsletter</a>
              <a href="signin.php?please_signin">Returns</a>
            </div>
            <?php }else{ 
              $uId = $_SESSION['id'];
              ?>
            <div class="footer-top__box">
              <h3>MY ACCOUNT</h3>
              <a href="user.php">My Account</a>
              <a href="orderHistory.php">Order History</a>
              <a href="wishlist.php">Wish List</a>
              <a href="#">Newsletter</a>
              <a href="#">Returns</a>
            </div>
            <?php } ?>
            <div class="footer-top__box">
              <h3>CONTACT US</h3>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-location"></use>
                  </svg>
                </span>
                42 Dream House, Dreammy street, 7131 Dreamville, USA
              </div>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-envelop"></use>
                  </svg>
                </span>
                company@gmail.com
              </div>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-phone"></use>
                  </svg>
                </span>
                456-456-4512
              </div>
              <div>
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-paperplane"></use>
                  </svg>
                </span>
                Dream City, USA
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer-bottom__box">
    
          </div>
          <div class="footer-bottom__box">
    
          </div>
        </div>
        </div>
      </footer>
      <!-- End Footer -->
    
      <!-- PopUp -->
      <div class="popup hide__popup">
        <div class="popup__content">
          <div class="popup__close">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-cross"></use>
            </svg>
          </div>
          <div class="popup__left">
            <div class="popup-img__container">
              <img class="popup__img" src="./images/popup.jpg" alt="popup">
            </div>
          </div>
          <div class="popup__right">
            <div class="right__content">
              <h1>Get Discount <span>30%</span> Off</h1>
              <p>Sign up to our newsletter and save 30% for you next purchase. No spam, we promise!
              </p>
              <form action="#">
                <input type="email" placeholder="Enter your email..." class="popup__form">
                <a href="#">Subscribe</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Go To -->
    
      <a href="#header" class="goto-top scroll-link">
        <svg>
          <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
        </svg>
      </a>
    
    
      <!-- Glide Carousel Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
      <!-- Animate On Scroll -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
      <!-- Custom JavaScript -->
      <!-- <script src="./js/products.js"></script> -->
      
      <script src="./js/slider.js"></script>
    

    </html>