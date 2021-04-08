<?php session_start(); 
     if(!isset($_SESSION['username'])){
         header("Location: login.php?error=no_user");
     }else{?>
<!DOCTYPE html>
<html>
    <head>
        <title> Insertimi i Quotes</title>
    </head>
    
    <body>
        <!--enctype="multipart/form-data"-është një lloj kodimi që lejon që filet të dërgohen përmes një metode POST. Thjesht, pa këtë kodim file nuk mund të dërgohen përmes metodes POST. Nëse dëshironi të lejoni një përdorues të ngarkojë një file përmes një forme, duhet ta përdorni këtë enctype.-->
        <form method="post" action="addQ.php" enctype="multipart/form-data">
            Quote Message: <textarea name='qMessage' cols='30' rows='15'></textarea><br><br>
            Quote From: <input type="text" name="qFrom"><br><br>
            Quote Upload:<input type="file" name="fileUpload"><br><br>
            Quote Proffesion: <input type="text" name="qProf"><br><br>
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
        $qMessage=$_POST['qMessage'];
        $qFrom = $_POST['qFrom'];
        $qProffesion = $_POST['qProf'];
        $fileUpload=$_FILES['fileUpload']['name'];
        $fileUpload_tmp=$_FILES['fileUpload']['tmp_name'];
        

        
        
        
        //$ _FILES ["file"] ["tmp_name"] përmban kopjen aktuale të përmbajtjes së file tuaj në server ndërsa. $ _FILES ["file"] ["name"] përmban emrin e file që keni ngarkuar nga kompjuteri.
        
        if($qMessage=='')
        {
            echo"<script>alert('Any input is Empty');</script>";
        }
        else
        {   
          //Per te mos u ruajtur file i njejt dy ose me shume here.
          $insert="SELECT * FROM quotes WHERE qMessage='$qMessage' LIMIT 1";
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
            
            $uploadFile="INSERT INTO quotes(qImage,qMessage,qFrom,qProffesion)
        VALUES('$fileUpload','$qMessage','$qFrom','$qProffesion')";
            
                if(mysqli_query($connect,$uploadFile))      
                {
                    echo "<script>alert('File is Upload');</script>";
                    echo "<script>window.open('quotes.php','_self');</script>";
                }
            }
        }
    }
        
}  
    
?>