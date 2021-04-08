<?php
session_start();
if(!isset($_SESSION['userName'])){
    header("Location: signin.php?please_signin");
}else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>I-shop || Order History</title>
        <link rel="stylesheet" href="./css/orderHistory.css" />
    </head>
    <body>
        <?php
            include "parts/header.php";
        ?>
        <?php 
        include "db/db.php";
        $uId = $_SESSION['id'];
        $query = "SELECT * FROM orders WHERE uId='$uId' order by oId DESC";
        $result = mysqli_query($connect, $query);
        $product = mysqli_num_rows($result);
        if($product < 1){ ?>
            <br>
            <br>
            <div class="card">
            <div class="product-info">
            <p>You have no order in your account!</p><br>
            <p>Please go back to Home and add items to cart!</p>
            <a href="index.php" class="product-remove">

            <i class="fas fa-backward" aria-hidden="true"></i>

						<span class="remove">Go Back</span>

					</a>
            </div>
            </div>
            <br>
            <br>
       <?php }else{
           while( $row = mysqli_fetch_array($result)){
               $oId = $row['oId'];
               $productId = $row['productId'];
               $productPrice = $row['productPrice'];
               $oDate = $row['oDate'];
               $isConfirmed = $row['confirmOrder'];
               $isShipped = $row['orderShipping'];
               $isOnTheWay = $row['onTheWay'];
               $isDelivered = $row['delivered']; 

            $selectP = "SELECT * FROM products WHERE id='$productId'";
            $resultSelect = mysqli_query($connect, $selectP);
            while( $rowP = mysqli_fetch_array($resultSelect)){
            $fileId = $rowP['id'];
            $fileName = $rowP['fileName'];
            $fileUpload = $rowP['fileUpload'];
            $fileDescription = substr($rowP['description'],0,100);
            $price = $rowP['price'];
            $sale = 0;

            if($productPrice != $price){
                $sale = $price - $productPrice;
            }
           
        ?>
<br>
<div class="card">
    <div class="title">Purchase Reciept</div>
    <div class="info">
        <div class="row">
            <div class="col-7"> <span id="heading">Date</span><br> <span id="details"><?php echo $oDate ?></span> </div>
            <div class="col-5 pull-right"> <span id="heading">Order No.</span><br> <span id="details"><?php echo $oId ?></span> </div>
        </div>
    </div>
    <div class="pricing">
        <div class="row">
            <div class="col-9"> <span id="name"><?php echo $fileName ?></span> </div>
            <div class="col-3"> <span id="price"><?php echo $price ?>  €</span> </div>
        </div>
        <div class="row">
            <div class="col-9"> <span id="name">Discount:</span> </div>
            <div class="col-3"> <span id="price"><?php echo $sale ?>  €</span> </div>
        </div>
    </div>
    <div class="total">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3"><big><?php echo $productPrice ?></big></div>
        </div>
    </div>
    <div class="tracking">
        <div class="title">Tracking Order</div>
    </div>
    <div class="progress-track">
        <ul id="progressbar">
            <li class="step0<?php if($isConfirmed != 0){ ?> active<?php }?>" id="step1">Order Confirmed</li>
            <li class="step0<?php if($isShipped != 0){ ?> active<?php }?>  text-center" id="step2">Shipped</li>
            <li class="step0<?php if($isOnTheWay != 0){ ?> active<?php }?> text-right" id="step3">On the way</li>
            <li class="step0<?php if($isDelivered != 0){ ?> active<?php }?> text-right" id="step4">Delivered</li>
        </ul>
    </div>
    <div class="footer1">
        <div class="row">
            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/YBWc55P.png"></div>
            <div class="col-10">Want any help? Please &nbsp;<a> contact us</a></div>
        </div>
    </div>
</div>
<br>  
<?php }
           }
       }
?> 

        <?php
            include "parts/footer.php";
        ?>
    </body>
    </html>

<?php        
 }
?>