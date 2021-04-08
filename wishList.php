<?php 
    session_start();
    if(!isset($_SESSION['userName'])){
        header("Location: signin.php");
    }else{
    $allPrice = 0;
    $youSave = 0;
?>
<!DOCTYPE html>

<html>

<head>
<script src="https://kit.fontawesome.com/46323304fb.js" crossorigin="anonymous"></script>
	<title>Shopping Wishlist</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/cart.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    a{
        text-decoration: none;  
    }
    </style>
</head>

<body>


<div class="container">

	<h1>Shopping Wishlist</h1>

	<div class="cart">

		<div class="products">
        <?php
        include "db/db.php";
        $uId = $_SESSION['id'];
        $query = "SELECT * FROM wishlist WHERE uId='$uId'";
        $result = mysqli_query($connect, $query);
        $product = mysqli_num_rows($result);
        if($product < 1){ ?>
            <div class="product">
            <div class="product-info">
            <p>You have no product in your wishlist!</p><br>
            <p>Please go back to Home and add items to wishlist!</p>
            <a href="index.php" class="product-remove">

            <i class="fas fa-backward" aria-hidden="true"></i>

						<span class="remove">Go Back</span>

					</a>
            </div>
            </div>
       <?php }
        while( $row = mysqli_fetch_array($result))
        {
            $pId = $row['pId'];
            $cId = $row['wId'];
            $selectP = "SELECT * FROM products WHERE id='$pId'";
            $resultSelect = mysqli_query($connect, $selectP);
        while( $rowP = mysqli_fetch_array($resultSelect))
        {
	
	        $fileId = $rowP['id'];
            $fileName = $rowP['fileName'];
            $fileUpload = $rowP['fileUpload'];
            $fileDescription = substr($rowP['description'],0,100);
            $price = $rowP['price'];
            $save = $rowP['save'];
            $dPrice = $rowP['dPrice'];
        ?>

			<div class="product">

				<img src="file/<?php echo $fileUpload ?>">

				<div class="product-info">

					<h3 class="product-name"><?php echo $fileName ?></h3>
                    <?php if($save == ""){ ?>
					<h4 class="product-price"><?php echo $price ?>  €</h4>
					<h4 class="product-offer"><?php echo "0" ?> %</h4>
                    <?php }else{ ?>  
                    <h4 class="product-price" style="text-decoration: line-through;"><?php echo $price ?>  €</h4>
                    <h4 class="product-price"><?php echo $dPrice ?>  €</h4>
					<h4 class="product-offer"><?php echo $save ?> %</h4>
                    <?php } ?> 

                    <a href="product.php?id=<?php echo $fileId ?>" id="product-go">

                    <i class="fas fa-eye" aria-hiden="true"></i>

						<span class="remove">Go to Product</span>

					</a>

					<a href="inc/removeFromWishList.php?cId=<?php echo $cId ?>" class="product-remove">

                    <i class="fas fa-trash" aria-hidden="true"></i>

						<span class="remove">Remove</span>

					</a>

				</div>
			</div>
            <?php 
        }              
                }?>
		</div>

	</div>

</div>
</body>
</html>

<?php } ?>