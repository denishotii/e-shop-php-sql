<?php
session_start();

if (isset($_POST['login-submit'])) {
	
	include "db.php";
	$username = $_POST['mailuid'];
	$password = $_POST['pwd'];

    $login = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
                   
    $con = mysqli_query($connect, $login);
    
    if(mysqli_num_rows($con)>0)
    {   
        $_SESSION['username'] = $username;
        header("Location: index.php?login=succes");
        exit();	
    }
     elseif(empty($username) || empty($password))
       {
        header("Location: login.php?error=emptyfields");
         echo "<script>alert('Username ose Password jane te zbrazeta!')</script>";
       }
    else
    {
        header("Location: login.php?error=wrongpassword");
        echo "<script>
        alert('Username ose Password jane gabim!')
        </script>";
        exit();
    }

}