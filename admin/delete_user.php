<?php
    session_start();
     if(!isset($_SESSION['username'])){
         header("Location: login.php?error=no_user");
     }else{
        include "db.php";

        if(isset($_GET['delete'])){

            $delete_id = $_GET['delete'];

            $delete_query = "DELETE FROM user_login WHERE id='$delete_id'";

            if(mysqli_query($connect, $delete_query))
            {
		
			     echo "<script>alert('File is Deleted!')</script>";
                 echo "<script>window.open('users.php','_self');</script>";
			     //header("location: viewFile(Update&Delete).php");
		    }
        }

    }

?>