<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=no_user");
    }else{
?>
<html>


<head>
        <title>I-shop | Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
        <form method="post" action="">
        How much discount in percentage(%)<input type="text" name="discount"><br><br>
        <input type="submit" name="set" value="Insert">
        </form>
        <?php
        include "db.php";
    
    if(isset($_POST['set']))
    {
        $discount=$_POST['discount'];
        $id = $_GET['id'];

        if($discount=='')
        {
            echo"<script>alert('Any input is Empty');</script>";
        }else{

            $disc = 100 - $discount;
            $nprice = "0".$disc;
            $sql = "SELECT * FROM products WHERE id=$id";
            $result = mysqli_query($connect, $sql);
            $queryResult = mysqli_num_rows($result);
            if($queryResult > 0){
                $row = mysqli_fetch_assoc($result);
                $price = $row['price'];
                $newPrice = $price*$nprice/100;
                $ins_sql = "UPDATE products SET save='$discount', dPrice='$newPrice' WHERE id=$id";
                if(mysqli_query($connect,$ins_sql))      
                {
                    echo "<script>alert('File is Upload');</script>";
                    echo "<script>window.open('products.php','_self');</script>";
                }

            }

        }
    }
    ?>
</body>
</html>
<?php } ?>