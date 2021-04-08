<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php?error=no_user");
}else{


        include "db.php";

        $id = $_GET['id'];
        $sql = "UPDATE products SET save=null, dPrice=price WHERE id=$id";

        if(mysqli_query($connect,$sql))      
                {
                    header("Location: products.php?succes=discount_deleted");
                }
    }