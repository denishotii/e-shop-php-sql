<?php
session_start();

if(!isset($_SESSION['userName'])){
    header("Location: ../signin.php?error=user_is_not_signed_in");
}else{

    $cId = $_GET['cId'];
    $uId = $_SESSION['id'];

    include "../db/db.php";

    $query = "DELETE FROM cart WHERE cId = '$cId' AND uId = '$uId'";
    $result = mysqli_query($connect, $query);
    header("Location: ../cart.php?succes=product_deleted");

}