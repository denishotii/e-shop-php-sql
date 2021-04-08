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
<table border='1'class="content-table" style='border:2px solid black;float:left;'>
<thead>
            <tr>
                <th>File Id</th>
                <th>File Name</th>
                <th>File Upload</th>
                <th>Description</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Discount</th>
                <th>Update File</th>
                <th>Delete File</th>
            </tr>
            </thead>
            <tbody>
            <?php
                include "db.php";
                
                $select = "SELECT * FROM products;";
                
                $query = mysqli_query($connect, $select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['id'];
                    $fileName = $row['fileName'];
                    $fileUpload = $row['fileUpload'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $fileAv = $row['fileAv'];
                    $save = $row['save'];
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $fileName; ?></td>
                <td><img src="../file/<?php echo $fileUpload; ?>" width="80" height="60"></td>
                <td style="width:300px"><?php echo $description; ?></td>
                <td><?php echo $price ?> €</td>
                <td style="text-align: center;"><?php echo $fileAv?></td>
                <?php if($save == ""){ ?>
                    <td style="text-align: center;"><a href="discount.php?id=<?php echo $id ?>">Discount</a></td>
                <?php   } else { ?>
                    <td style="text-align: center;">Discount: <?php echo $save." %" ?><br>Set New Discount:<a href="discount.php?id=<?php echo $id ?>">Click</a><br><label onclick="deleteDiscount(<?php echo $id?>);">Delete Discount: Click</label></td>
                <?php }?>
                <td><a href="update.php?update=<?php echo $id; ?>">Update</a></td>
                <td><button onclick="deleteProduct(<?php echo $id?>);" value="Delete">Delete</button></td>
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