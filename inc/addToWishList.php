<?php
session_start();

if(!isset($_SESSION['userName'])){
    header("Location: ../signin.php?error=user_is_not_signed_in");
}else{

    $pId = $_GET['pId'];
    $uId = $_SESSION['id'];
    $wDate = date('Y-m-d H:i:s');
    $error = 0;

    include "../db/db.php";

    $query = "SELECT * FROM wishlist WHERE uId='$uId' AND pId='$pId' LIMIT 1";
    $result = mysqli_query($connect, $query);
     $product = mysqli_fetch_assoc($result);

     if ($product) 
            { // if user exists
                    $error = 1;
                    header("Location: ../index.php?product=is_in_wish_list");
            }
            if($error == 0)
            {
              // $password = md5($password);//encrypt i passwordit para se ta ruajme ne database
                
                //Kujdes te veqant tek insertimi i te dhenave!!!
               
                    $insWishList ="INSERT INTO wishlist (uId,pId,wDate)
                    VALUES ('$uId','$pId','$wDate')";
                    
                        mysqli_query($connect,$insWishList);
                        header("Location: ../index.php?succes=product_added");
        
                   }

}