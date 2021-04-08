<?php 
if(!$_GET['orderId'] && !$_GET['pId']){
    header("Location: index.php?error=no_user");
}else{
    include "db.php";

    $orderId = $_GET['orderId'];
    $productId = $_GET['pId'];

    $select = "SELECT * FROM products WHERE id='$productId'";
    $query = mysqli_query($connect, $select);
    while($row = mysqli_fetch_assoc($query)){
        $av = $row['fileAv'];
    }
    $Av = $av - 1;
    $minus = "UPDATE products SET fileAv='$Av' WHERE id='$productId'";
    mysqli_query($connect,$minus);
    $confirm = "UPDATE orders SET confirmOrder='1' WHERE oId='$orderId'";
    mysqli_query($connect,$confirm);

    header("Location: orders.php?succes_change");


}