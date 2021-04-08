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
        <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<table border='1' class="content-table" style='border:2px solid black;float:left;'>
<thead>
            <tr>
                <td>Order Id</td>
                <td>Full Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Citz</td>
                <td>Phone Number</td>
                <td>Zip</td>
                <td>Name on Card</td>
                <td>Card Number</td>
                <td>Exp Month</td>
                <td>Exp Year</td>
                <td>CCV</td>
                <td>Product Id</td>
                <td>Product Name</td>
                <td>Product Price</td>
                <td>Date of Order</td>
                <td>Confirm Order</td>
                <td>Order is Shipping</td>
                <td>Order is on the way</td>
                <td>Order is delivered</td>
            </tr>
            </thead>
            <tbody>
            <?php
                include "db.php";
                
                $select = "SELECT * FROM orders;";
                
                $query = mysqli_query($connect, $select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['oId'];
                    $fullName = $row['fullName'];
                    $email = $row['email'];
                    $address = $row['address'];
                    $city = $row['city'];
                    $phoneNumber = $row['phoneNumber'];
                    $zip = $row['zip'];
                    $nameOnCard = $row['nameOnCard'];
                    $creditCardNumber = $row['creditCardNumber'];
                    $expMonth = $row['expMonth'];
                    $expYear = $row['expYear'];
                    $ccv = $row['ccv'];
                    $productId = $row['productId'];
                    $productName = $row['productName'];
                    $productPrice = $row['productPrice'];
                    $date = $row['oDate'];
                    $confirmOrder = $row['confirmOrder'];
                    $orderShipping = $row['orderShipping'];
                    $onTheWay = $row['onTheWay'];
                    $delivered = $row['delivered'];
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $fullName; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $city; ?></td>
                <td><?php echo $phoneNumber; ?></td>
                <td><?php echo $zip; ?></td>
                <td><?php echo $nameOnCard; ?></td>
                <td><?php echo $creditCardNumber; ?></td>
                <td><?php echo $expMonth; ?></td>
                <td><?php echo $expYear; ?></td>
                <td><?php echo $ccv; ?></td>
                <td><?php echo $productId; ?></td>
                <td><?php echo $productName; ?></td>
                <td><?php echo $productPrice ?> €</td>
                <td><?php echo $date; ?></td>
                <?php if($confirmOrder == 0){ ?>
                <td> <a href="confirmOrder.php?orderId=<?php echo $id ?>&pId=<?php echo $productId ?>"><button style="background: lightgrey" name="confirmOrder">Confirm this User Order</button></td>
                <?php }else if($confirmOrder == 1){ ?>
                <td>Order is Confirmed</td>
                <?php }?>
                <?php if($orderShipping == 0){ ?>
                <td> <a href="orderShipping.php?orderId=<?php echo $id ?>"><button style="background: lightgrey" name="confirmOrder">This order is shipped</button></td>
                <?php }else if($orderShipping == 1){ ?>
                <td>Order is Shipped</td>
                <?php }?>
                <?php if($onTheWay == 0){ ?>
                <td> <a href="orderOnTheWay.php?orderId=<?php echo $id ?>"><button style="background: lightgrey" name="confirmOrder">This order is on the way</button></td>
                <?php }else if($onTheWay == 1){ ?>
                <td>Order is on the way</td>
                <?php }?>
                <?php if($delivered == 0){ ?>
                <td> <a href="orderDelivered.php?orderId=<?php echo $id ?>"><button style="background: lightgrey" name="confirmOrder">This order is delivered</button></td>
                <?php }else if($delivered == 1){ ?>
                <td>Order is delivered</td>
                <?php }?>
            </tr>
              <?php  } ?>
              </tbody>
        </table>
        <a href="./"><button style="width:70px;height:30px;background-color:lightblue;margin-left:50px;"><b>Back</b></button></a>
        <script language="JavaScript" type="text/javascript">
            
            function deleteProduct(deleteId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'delete.php?delete='+deleteId;
                    return true;
                }
            }

            function deleteDiscount(deleteId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'dDiscount.php?id='+deleteId;
                    return true;
                }
            }
        </script>
        <script type="text/javascript">
        function goBack() {
          window.history.back();
        }
    </script>
        </body>
        <?php 
    }
        ?>
</html>