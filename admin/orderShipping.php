<?php 
if(!$_GET['orderId']){
    header("Location: index.php?error=no_user");
}else{
    include "db.php";

    $orderId = $_GET['orderId'];

    $shipped = "UPDATE orders SET orderShipping='1' WHERE oId='$orderId'";
    mysqli_query($connect,$shipped);

    header("Location: orders.php?succes_change");


}