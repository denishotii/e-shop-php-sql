<?php 
if(!$_GET['orderId']){
    header("Location: index.php?error=no_user");
}else{
    include "db.php";

    $orderId = $_GET['orderId'];

    $onTheWay = "UPDATE orders SET onTheWay='1' WHERE oId='$orderId'";
    mysqli_query($connect,$onTheWay);

    header("Location: orders.php?succes_change");


}