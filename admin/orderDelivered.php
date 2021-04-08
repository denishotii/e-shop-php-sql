<?php 
if(!$_GET['orderId']){
    header("Location: index.php?error=no_user");
}else{
    include "db.php";

    $orderId = $_GET['orderId'];

    $delivered = "UPDATE orders SET delivered='1' WHERE oId='$orderId'";
    mysqli_query($connect,$delivered);

    header("Location: orders.php?succes_change");


}