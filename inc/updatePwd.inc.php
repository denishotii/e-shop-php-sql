<?php
    include "../db/db.php";
    if(isset($_POST['update']))
    {

        $fileId = $_POST['id'];
        $newPassword = $_POST['pwd'];
        $error;
        
        $update = '../updatePwd.php?update='.$fileId;
        $userUp = '../user.php?id='.$fileId;

	   
        if( empty($newPassword) )
        {
            $error = 1;
            echo "<script>alert('Please fill all the inputs!')</script>";
            echo "<script>window.open('$update','_self');</script>";
            exit();
        }
        if(strlen($newPassword) < 6){
            $error = 1;
            header("Location: ../updatePwd.php?error=enter_6_or_more_characters_on_password&update=".$fileId);
        }
        if($error == 0) 
        {	
                               
            $update_query="UPDATE user_login SET
                password = '$newPassword'
                WHERE
                id = '$fileId'";
            
            if(mysqli_query($connect, $update_query))
            {
		
			     echo "<script>alert('Password is updated!')</script>";
                 header("Location: ../signin.php?password_changed=succes,Please_login_with_new_password ");
                session_destroy();
                exit();
			     //header("location: viewFile(Update&Delete).php");
		    }
	   }
    }

?>