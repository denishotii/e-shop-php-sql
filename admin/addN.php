<?php session_start(); 
     if(!isset($_SESSION['username'])){
         header("Location: login.php?error=no_user");
     }else{?>
<!DOCTYPE html>
<html>
    <head>
        <title> Insertimi i lajmeve</title>
    </head>
    
    <body>
        <!--enctype="multipart/form-data"-është një lloj kodimi që lejon që filet të dërgohen përmes një metode POST. Thjesht, pa këtë kodim file nuk mund të dërgohen përmes metodes POST. Nëse dëshironi të lejoni një përdorues të ngarkojë një file përmes një forme, duhet ta përdorni këtë enctype.-->
        <form method="post" action="addN.php" enctype="multipart/form-data">
            News Name: <input type="text" name="fileName"><br><br>
            News Upload:<input type="file" name="fileUpload"><br><br>
            News By: <input type="text" name="byName"><br><br>
            News Description: <textarea name='content' cols='30' rows='15'></textarea><br><br>
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
        $newsBy = $_POST['byName'];

        
        
        
        //$ _FILES ["file"] ["tmp_name"] përmban kopjen aktuale të përmbajtjes së file tuaj në server ndërsa. $ _FILES ["file"] ["name"] përmban emrin e file që keni ngarkuar nga kompjuteri.
        
        if($fileName=='')
        {
            echo"<script>alert('Any input is Empty');</script>";
        }
        else
        {   
          //Per te mos u ruajtur file i njejt dy ose me shume here.
          $insert="SELECT * FROM shopnews WHERE nName='$fileName' OR nImage='$fileUpload' LIMIT 1";
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
            
            $uploadFile="INSERT INTO shopnews(nName,nImage,nBy,nText)
        VALUES('$fileName','$fileUpload','$newsBy','$fileDescription');";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    echo "<script>alert('File is Upload');</script>";
                    echo "<script>window.open('news.php','_self');</script>";
                }
            }
        }
    }
        
}  
    
?>