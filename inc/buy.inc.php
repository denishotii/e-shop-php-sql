<?php 
session_start();
    if(!$_GET['pId']){
        header("Location: ../index.php?error=product_id");
    }else{
    
        if(isset($_POST['submit'])){
        include "../db/db.php";
    
        $pId = $_GET['pId'];
        $select = "SELECT * FROM products WHERE id='$pId'";
	
        $query = mysqli_query($connect, $select);

        $row = mysqli_fetch_assoc($query);
                    $id = $row['id'];
                    $fileName = $row['fileName'];
                    $price = $row['price'];
                    $av = $row['fileAv'];
                    $save = $row['save'];
                    $dPrice = $row['dPrice'];
                    if($save == ""){
                        $newPrice = $price;
                    }else{
                        $newPrice = $dPrice;
                    }
              $uId = $_SESSION['id'];
              $fullName = $_POST['fullname'];
              $email = $_POST['email'];
              $address = $_POST['address'];
              $city = $_POST['city'];
              $phoneNumber = $_POST['number'];
              $zip = $_POST['zip'];
              $nameOnCard = $_POST['cardname'];
              $creditCardNumber = $_POST['cardnumber'];
              $expMonth = $_POST['expmonth'];
              $expYear = $_POST['expyear'];
              $cvv = $_POST['cvv'];
              $date = date('Y-m-d H:i:s');
              
              $order = "INSERT INTO orders (uId,fullName,email,address,city,phoneNumber,zip,nameOnCard,creditCardNumber,expMonth,expYear,ccv,productId,productName,productPrice,oDate)
              VALUES ('$uId','$fullName','$email','$address','$city','$phoneNumber','$zip','$nameOnCard','$creditCardNumber','$expMonth','$expYear','$cvv','$id','$fileName','$newPrice','$date')";
              
                  if(mysqli_query($connect,$order)){
                  $_SESSION['productId'] = $id;
                  header("Location: purchaseEmailToUser.php");
                  }
            
            }  
            }
?>