<?php
      session_start();
        include "./db/db.php";

        if(isset($_GET['id'])){

            $product_id = $_GET['id'];

            $select = "SELECT * FROM products WHERE id='$product_id'";
	
            $query = mysqli_query($connect, $select);

            while($row = mysqli_fetch_assoc($query)){
                    $id = $row['id'];
                    $fileName = $row['fileName'];
                    $fileUpload = $row['fileUpload'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $availability = $row['fileAv'];
                    $category = $row['category'];
                    $save = $row['save'];
                    $dPrice = $row['dPrice'];
                  }
                
    ?>
<!DOCTYPE html>
<html lang="en">
<body>

  <!-- Header -->
  <header id="header" class="header">
    <?php 
      include "parts/header.php";
    ?>
  </header>

    <div class="page__title-area">
      <div class="container">
        <div class="page__title-container">
          <ul class="page__titles">
            <li>
              <a href="index.php">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-home"></use>
                </svg>
              </a>
            </li>
            <li class="page__title"><?php echo $fileName ?></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main id="main">
    <div class="container">
      <!-- Products Details -->
      <section class="section product-details__section">
        <div class="product-detail__container">
          <div class="product-detail__left">
            <div class="details__container--left">
              <!-- <div class="product__pictures">
                <div class="pictures__container">
                  <img class="picture" src="./images/products/iPhone/iphone1.jpeg" id="pic1" />
                </div>
                <div class="pictures__container">
                  <img class="picture" src="./images/products/iPhone/iphone2.jpeg" id="pic2" />
                </div>
                <div class="pictures__container">
                  <img class="picture" src="./images/products/iPhone/iphone3.jpeg" id="pic3" />
                </div>
                <div class="pictures__container">
                  <img class="picture" src="./images/products/iPhone/iphone4.jpeg" id="pic4" />
                </div>
                <div class="pictures__container">
                  <img class="picture" src="./images/products/iPhone/iphone5.jpeg" id="pic5" />
                </div>
              </div> -->
              <div class="product__picture" id="product__picture">
                <!-- <div class="rect" id="rect"></div> -->
                <div class="picture__container">
                  <img src="./file/<?php echo $fileUpload ?>" id="pic" />
                </div>
              </div>
              <div class="zoom" id="zoom"></div>
            </div>

            <div class="product-details__btn">
              <a class="add" href="inc/addToCart.php?pId=<?php echo $id ?>">
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-cart-plus"></use>
                  </svg>
                </span>
                ADD TO CART</a>
              <a class="buy" href="buy.php?pId=<?php echo $id ?>">
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                  </svg>
                </span>
                BUY NOW
              </a>
            </div>
          </div>

          <div class="product-detail__right">
            <div class="product-detail__content">
              <h3><?php echo $fileName?></h3>
              <div class="price">
                <span class="new__price"><?php echo $price." €" ?></span>
              </div>
              <div class="product__review">
                <div class="rating">
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                  </svg>
                </div>
                <a href="#" class="rating__quatity">3 reviews</a>
              </div>
              <p>
                <?php
                  echo $description;
                ?>
              </p>
              <div class="product__info-container">
                <ul class="product__info">
                  <li>
                    <div class="input-counter">
                      <span>Quantity:</span>
                      <div>
                        <span class="minus-btn">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-minus"></use>
                          </svg>
                        </span>
                        <input type="text" min="1" value="1" max="10" class="counter-btn">
                        <span class="plus-btn">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-plus"></use>
                          </svg>
                        </span>
                      </div>
                    </div>
                  </li>

                  <!-- <li>
                    <span>Subtotal:</span>
                    <a href="#" class="new__price">$250.99</a>
                  </li> -->
                  <li>
                    <span>Availability:</span>
                    <a href="#" class="in-stock">In Stock (<?php echo $availability ?> Items)</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="product-detail__bottom">
          <div class="title__container tabs">

            <div class="section__titles category__titles ">
              <div class="section__title detail-btn active" data-id="description">
                <span class="dot"></span>
                <h1 class="primary__title">Description</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title detail-btn" data-id="reviews">
                <span class="dot"></span>
                <h1 class="primary__title">Reviews</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title detail-btn" data-id="shipping">
                <span class="dot"></span>
                <h1 class="primary__title">Shipping Details</h1>
              </div>
            </div>
          </div>

          <div class="detail__content">
            <div class="content active" id="description">
              <p><?php echo $description ?></p>
            </div>
            <div class="content" id="reviews">
              <h1>Customer Reviews</h1>
              <div class="rating">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                </svg>
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                </svg>
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                </svg>
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                </svg>
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                </svg>
              </div>
            </div>
            <div class="content" id="shipping">
              <h3>Returns Policy</h3>
              <p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay
                the return shipping costs if the return is a result of our error (you received an incorrect or defective
                item, etc.).</p>
              <p>You should expect to receive your refund within four weeks of giving your package to the return
                shipper, however, in many cases you will receive a refund more quickly. This time period includes the
                transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes
                us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to
                process our refund request (5 to 10 business days).
              </p>
              <p>If you need to return an item, simply login to your account, view the order using the 'Complete
                Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via
                e-mail of your refund once we've received and processed the returned item.
              </p>
              <h3>Shipping</h3>
              <p>We can ship to virtually any address in the world. Note that there are restrictions on some products,
                and some products cannot be shipped to international destinations.</p>
              <p>When you place an order, we will estimate shipping and delivery dates for you based on the
                availability of your items and the shipping options you choose. Depending on the shipping provider you
                choose, shipping date estimates may appear on the shipping quotes page.
              </p>
              <p>Please also note that the shipping rates for many items we sell are weight-based. The weight of any
                such item can be found on its detail page. To reflect the policies of the shipping companies we use, all
                weights will be rounded up to the next full pound.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Related Products -->
      <section class="section related__products">
        <div class="title__container">
          <div class="section__title filter-btn active">
            <span class=" dot"></span>
            <h1 class="primary__title">Related Products</h1>
          </div>
        </div>
        <!-- Related Products -->
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides latest-center">
              <?php 
                include "parts/relatedP.php";
              ?>   
             </ul>
            </div>
      </section>
      <!-- Latest Products -->
      <section class="section latest__products">
        <div class="title__container">
          <div class="section__title filter-btn active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">Latest Products</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides latest-center">
              <?php 
                include "./parts/latestP.php";
              ?>   
             </ul>
            </div>
      </section>
    </div>
    <!-- Facility Section -->
    <section class="facility__section section" id="facility">
      <?php
        include "./parts/facility.php";
      ?>
    </section>
  </main>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <?php
      include "parts/footer.php";
    ?>
  </footer>

  <!-- End Footer -->

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
  <script src="./js/products.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/slider.js"></script>
</body>

</html>
<?php } ?>