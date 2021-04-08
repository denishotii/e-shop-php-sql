<?php 
    session_start();
?>
<html>
    <head>
    <title>I-shop.com | Search</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
        .div{
            margin-top: 80px;
            margin-left: 125px;
        }
        .div-1{
            border: 1px solid black /*#FFFAFA*/;
            width: 22.5%;
            height: 380px;
            margin-left: 25px;
            float: left;
            margin-top: 40px;
            background-color:	#FFFAFA;
        }
        .img{
            width:100%;
            height:200px
        }
        </style>
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/footer.css">
    </head>
    <body>
        <?php 
            include "parts/header.php";
        ?>
       <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="category__center">
        <?php
            include "db/db.php";

                if (isset($_POST['submit-search'])) {
                    $search = mysqli_real_escape_string($connect, $_POST['search']);
                    $sql = "SELECT * FROM products WHERE fileName LIKE '%$search%' OR description LIKE '%$search%' OR price LIKE '%$search%' OR category LIKE '%$search%'";
                    $result = mysqli_query($connect, $sql);
                    $queryResult = mysqli_num_rows($result);

                    $insert="SELECT * FROM search WHERE searched='$search' LIMIT 1";
                    $query=mysqli_query($connect,$insert);
                    $exist=mysqli_fetch_assoc($query);
                    if($exist){
                        $n = $exist['times'];
                        $i = $n + 1;
                        $plus_query = "UPDATE search SET times='$i' WHERE searched='$search'";
                        mysqli_query($connect, $plus_query);
                    }else{
                        $insertInto = "INSERT INTO search(searched)
                        VALUES('$search');";
                        mysqli_query($connect, $insertInto);
                    }

                    if($queryResult > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $fileId = $row['id'];
                            $fileName = $row['fileName'];
                            $fileUpload = $row['fileUpload'];
                            $fileDescription = substr($row['description'],0,100);
                            $price = $row['price'];
                        ?>
                         <div class="product category__products">
                    <div class="product__header">
                      <img src="./file/<?php echo $fileUpload ?>" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3><?php echo $fileName ?></h3>
                      <div class="rating">
                        <svg>
                          <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                        </svg>
                        </svg>
                      </div>
                      <div class="product__price">
                        <h4><?php echo $price ?> €</h4>
                      </div>
                      <a href="inc/addToCart.php?pId=<?php echo $fileId ?>"><button type="submit" class="product__btn">Add To Cart</button></a>
                    </div>
                  <ul>
                      <li>
                        <a data-tip="Quick View" data-place="left" href="./product.php?id=<?php echo $fileId ?>">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-eye"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a data-tip="Add To Wishlist" data-place="left" href="inc/addToWishList.php?pId=<?php echo $fileId ?>">
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
        <?php } ?>
        </ul>
                <?php
                    }else{
                        ?>
                        <div class="div div-seaarch">
                            <h1>We were unable to find a product with a search term of <b><?php echo $search ?></b>.</h1>
                        </div>
                <?php
                    }
                } 
         ?>
</div>
        </div>
         <?php
            include "parts/footer.php";
        ?>
      <!--  <div style="position:relative;top:45vh;z-index:100;">
        
        </div>-->
    </body>
</html>