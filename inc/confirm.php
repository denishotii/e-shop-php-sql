<?php
    include "../db/db.php";

        if(isset($_GET['email'])){

            $confirm_email = $_GET['email'];

            $delete_query = "UPDATE user_login SET confirm='1' WHERE email='$confirm_email'";

            if(mysqli_query($connect, $delete_query))
            {
                 echo "<script>window.open('../signin.php?email_confirmed','_self');</script>";
			     //header("location: viewFile(Update&Delete).php");
		    }
        }

            