<?php
session_start();

if (isset($_POST['login'])) {

    include "../db/db.php";
	$username = $_POST['username'];
    $email = $_POST['email'];
	$password = $_POST['password'];

    $login = "SELECT * FROM user_login WHERE email='$username' OR username='$username' AND password='$password'";
                   
    $con = mysqli_query($connect, $login);

    if(mysqli_num_rows($con)>0)
    {   
        $row = mysqli_fetch_array($con);
        $id = $row["id"];
        $myUsername = $row["username"];
        $myEmail = $row["email"];
        $myPassword = $row["password"];
        $isConfirm = $row['confirm'];
        $_SESSION['id'] = $id;
        $_SESSION['userName'] = $myUsername;
        $_SESSION['email'] = $myEmail;
        $_SESSION['password'] = $myPassword;
        $_SESSION['isConfirm'] = $isConfirm;
        if($_SESSION['isConfirm'] == 1){
        header("Location: ../index.php?login=succes");
        }else{
            session_destroy();
            header("Location: ../signin.php?error=please_confirm_your_email");
        }
    }
     elseif(empty($username) || empty($password))
       {
        header("Location: ../signin.php?error=emptyfields");
         echo "<script>alert('Username ose Password jane te zbrazeta!')</script>";
       }
    else
    {
        header("Location: ../signin.php?error=wrongpassword");
        echo "<script>
        alert('Username ose Password jane gabim!')
        </script>";
        exit();
    }

}