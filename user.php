<?php
    session_start();
     if(!isset($_SESSION['userName'])){
        header("Location: signin.php?error=no_user");
    }
    else{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Info</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./css/header.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #FFFAFA;
            width: 100%;
            height: 100%;
        }
        .div-1{
            width:50%;
            height:99vh;
            border: 1px solid #FFFAFA;
            transform: translate(50%, 0%);
            text-align: center;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .h2{

            margin-top: 5px;
            margin-left: 40px;
            font-size: 32px;
            font-family: 'Kanit', sans-serif;
        }
        .img{
            margin-top: 15px;
            width: 200px;
            height: 200px;
            position: relative;
            top: 30px;
        }
        .user{
            position: relative;
            top: 55px;
            font-size: 22px;
            font-family: 'Ubuntu', sans-serif;
            text-align: center;
            margin-top: 15px;
        }
        .price{
            position: relative;
            top: 85px;
            left: 50px;
            font-size: 35px;
            font-family: 'Anton', sans-serif;
        }
        .h5{
            position: absolute;
            left: 25px;
            top: 20px;
            color: black;
            cursor: pointer;
            font-weight: 400;
            font-size: 20px;
        }
        i{
            cursor: pointer;
        }
        .button{
            position: relative;
            top: 60px;
            text-align: center;
            background-color: lightgray;
            height: 30px;
            margin-top: 15px;
        }
    </style>
    </head>
    <body>
    <?php 
        include "parts/header.php";
    ?>
    <?php
        include "db/db.php";

        if(isset($_SESSION['id'])){

            $user_id = $_SESSION['id'];
            $userPassword = $_SESSION['password'];

            $select = "SELECT * FROM user_login WHERE id='$user_id' AND password='$userPassword'";
	
            $query = mysqli_query($connect, $select);

            while($row=mysqli_fetch_array($query)){
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $password = $row['password'];
                // $isConfirm = $row['confirm'];
                }
    ?>
                 <div class="div-1">
                    <h2 class="h2">
                        <?//php echo $fileName; ?>
                        <a href="user.php?id=<?php echo $id;?>">
                            <?php echo "User Info: "; ?>
                        </a>
                    </h2>
                    <img src="file\<?php echo "user-default.jpg"; ?>" class="img">
                    <p class="user">
                    Username : <?php echo $username; ?>
                    </p>
                    <p class="user">
                    Email : <?php echo $email; ?>
                    </p>
                    <p class="user">
                    Password : <label id="input10"> <?php echo "*********"; ?> </label> 
                    <i id="i-3" style="display: inline;font-size: 20px;margin-left: 20px;" class="far fa-eye i"></i>
                    <i id="i-2" style="display: none;font-size: 20px;margin-left: 20px;" class="far fa-eye-slash i"></i>
                    </p>
                    <a href="updatePwd.php?update=<?php echo $id ?>"><button class="button">Update Password</button></a>
                    <a href="inc/signout.php"><button class="button" style="width: 100px">Sign out</button></a>
                    </div>

        <?php } 
    }
        ?>

    <script>

        $(document).ready(function() {
            $('#i-2').click(function() {
                $('#input10').html("*********");
                $('#i-3').css({'display':'inline'});
                $('#i-2').css({'display':'none'});
            });

            $('#i-3').click(function() {
                $('#input10').html("<?php echo $password ?>");
                $('#i-3').css({'display':'none'});
                $('#i-2').css({'display':'inline'});
            });
        });

    </script>
    
    </body>
</html>