<?php   

        include "./db/db.php";
        $selectP = "SELECT * FROM products order by rand() LIMIT 0,4";

        $queryP = mysqli_query($connect, $selectP);
        
        //mysqli_fetch array -eshte nje funksion qe perdoret per te marre rreshtat nga databaza dhe per ti ruajtur ato si nje grup.
        while( $row = mysqli_fetch_array($queryP))
        {
	
	        $fileId = $row['id'];
            $fileName = $row['fileName'];
            $fileUpload = $row['fileUpload'];
            $fileDescription = substr($row['description'],0,100);
            $price = $row['price'];
            $save = $row['save'];
            $dPrice = $row['dPrice'];
        ?>
                <li class="glide__slide" styl="display:inline;">
                  <div class="product">
                    <div class="product__header">
                      <img src="file\<?php echo $fileUpload; ?>" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3><?php echo $fileName; ?></h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4><?php echo $price?> €</h4>
                      </div>
                      <a href="inc/addToCart.php?pId=<?php echo $fileId ?>"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                    <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="product.php?id=<?php echo $fileId;?>">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="inc/addToWishList.php?pId=<?php echo $fileId;?>">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Compare" data-place="left" href="#">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  </li>
                  <?php } ?>