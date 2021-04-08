<?php
     session_start();
     if(!isset($_SESSION['username'])){
         header("Location: login.php?error=no_user");
     }else{?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Products</title>
    </head>
    
    <body>
    <?php
        include "db.php";

        if(isset($_GET['update'])){

            $update_id = $_GET['update'];

            $select = "SELECT * FROM upload WHERE id='$update_id'";
	
            $query = mysqli_query($connect, $select);

            while($row=mysqli_fetch_array($query)){
	
    ?>
    <form method='post' action="update_ID.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        File Name:<input type="text" name="fileName" value="<?php echo $row['fileName'];?>">
        <br><br>
        File Upload:<input type="file" name="fileUpload" value="<?php echo $row['fileUpload'] ?>" placeholder="file/<?php echo $row['fileUpload'];?>">
        <img src="../file/<?php echo $row['fileUpload'];?>" width="100" height="100">
        <br><br>
        File Description:<textarea name="description" cols="30" rows="20"><?php echo $row['description'];?>
        </textarea>
        <br><br>
        <input type="submit" name="update" value="Update">
    
        <?php } } } ?>  
    </form>
    </body>
</html>