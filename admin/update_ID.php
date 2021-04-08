<?php
    include "db.php";
    if(isset($_POST['update']))
    {

        $fileId = $_POST['id'];
        $fileName1 = $_POST['fileName'];
        $fileDescription1 =$_POST['description'];
        $fileUpload1 = $_FILES['fileUpload'] ['name'];
        $fileUpload1_tmp=$_FILES['fileUpload']['tmp_name'];
        
        $update = 'update.php?update='.$fileId;

	   
        if(empty($fileName1) || empty($fileDescription1) || empty($fileUpload1) )
        {
            echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
            
            echo "<script>window.open('$update','_self');</script>";
            exit();
        }
        else 
        {	
            move_uploaded_file($fileUpload1_tmp,"../file/$fileUpload1");
                               
            $update_query="UPDATE upload SET
                fileName = '$fileName1',
                fileUpload = '$fileUpload1',
                description = '$fileDescription1'
                WHERE
                id = '$fileId'";
            
            if(mysqli_query($connect, $update_query))
            {
		
			     echo "<script>alert('File is updated!')</script>";
                 echo "<script>window.open('index.php','_self');</script>";
			     //header("location: viewFile(Update&Delete).php");
		    }
	   }
    }

?>