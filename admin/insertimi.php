<?php session_start(); 
     if(!isset($_SESSION['username'])){
         header("Location: login.php?error=no_user");
     }else{?>
<!DOCTYPE html>
<html>
    <head>
        <title> Insertimi i produkteve</title>
    </head>
    
    <body>
        <!--enctype="multipart/form-data"-është një lloj kodimi që lejon që filet të dërgohen përmes një metode POST. Thjesht, pa këtë kodim file nuk mund të dërgohen përmes metodes POST. Nëse dëshironi të lejoni një përdorues të ngarkojë një file përmes një forme, duhet ta përdorni këtë enctype.-->
        <form method="post" action="insertimi.php" enctype="multipart/form-data">
            Product Name: <input type="text" name="fileName"><br><br>
            Product Upload:<input type="file" name="fileUpload"><br><br>
            Product Description: <textarea name='content' cols='30' rows='15'></textarea><br><br>
            Product Price: <input type="text" name="filePrice"><br><br>
            Product Availability: <input type="number" name="fileAv"><br><br>
            Product Category: <select name="category">
                                <option value="gaming">Gaming</option>
                                <option value="ipad pro">Ipad Pro</option>
                                <option value="apple">Apple</option>
                                <option value="sport">Sport</option>
                                <option value="books">Books</option>
                                <option value="food">Food & Drink</option>
                               </select><br><br>
            <input type="submit" name="upload" value="Insert">
            <input type="reset" name="cancel" value="Cancel">
        </form>
        
        <a href='../'>Home</a>
    </body>
</html>
<?php
    include "db.php";
    
    if(isset($_POST['upload']))
    {
        $fileName=$_POST['fileName'];
        $fileDescription=$_POST['content'];
        $fileUpload=$_FILES['fileUpload']['name'];
        $fileUpload_tmp=$_FILES['fileUpload']['tmp_name'];
        $filePrice = $_POST['filePrice'];
        $fileAv = $_POST['fileAv'];
        $category = $_POST['category'];

        
        
        
        //$ _FILES ["file"] ["tmp_name"] përmban kopjen aktuale të përmbajtjes së file tuaj në server ndërsa. $ _FILES ["file"] ["name"] përmban emrin e file që keni ngarkuar nga kompjuteri.
        
        if($fileName=='')
        {
            echo"<script>alert('Any input is Empty');</script>";
        }
        else
        {   
          //Per te mos u ruajtur file i njejt dy ose me shume here.
          $insert="SELECT * FROM products WHERE fileName='$fileName' OR fileUpload='$fileUpload' LIMIT 1";
            $query=mysqli_query($connect,$insert);
            
            $exist=mysqli_fetch_assoc($query);
            
            if($exist)
            {
                if($exist['fileUpload']===$fileUpload)
                {
                    echo "<script>alert('This file already exists!')</script>";
                }
            }
            else
            {
           move_uploaded_file($fileUpload_tmp,"../file/$fileUpload");
            
            $uploadFile="INSERT INTO products(fileName,fileUpload,description,price,fileAv,category)
        VALUES('$fileName','$fileUpload','$fileDescription','$filePrice','$fileAv','$category');";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    echo "<script>alert('File is Upload');</script>";
                    echo "<script>window.open('index.php','_self');</script>";
                }
            }
        }
    }
        
}  
    
?>