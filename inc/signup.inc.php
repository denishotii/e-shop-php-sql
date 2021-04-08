<?php
    session_start();
    
    //Inicializimi i variablave
    $username = "";
    $email    = "";
    $error;
    $errors = array();

    include "../db/db.php";

        if(isset($_POST['signup']))
        {
            //mysqli_real_escape_string(); eshte nje funksion qe i largon karakteret speciale. Përdoret për të krijuar një string legal SQL që mund të përdoret në një query te SQL.
            $username = mysqli_real_escape_string($connect,$_POST['usernamesp']);
            $email = mysqli_real_escape_string($connect,$_POST['emailsp']);
            $password = mysqli_real_escape_string($connect,$_POST['passwordsp']);
                  
            
                
            $query = "SELECT * FROM user_login WHERE username='$username' OR email='$email' LIMIT 1";
                
            $result = mysqli_query($connect, $query);
            $user = mysqli_fetch_assoc($result);
      
            if ($user) 
            { // if user exists
                if ($user['username'] === $username) 
                {
                    $error = 1;
                    header("Location: ../signin.php?username=not_available");
                }
                if ($user['email'] === $email) 
                {
                    $error = 1;
                    header("Location: ../signin.php?email=not_available");
                }
            }
            if (empty($username)){
                $error = 1;
                header("Location: ../signin.php?empty=username");
            }
            if (empty($email)){ 
                $error = 1;
                header("Location: ../signin.php?empty=email");
            }
            if (empty($password)){ 
                $error = 1;
                header("Location: ../signin.php?empty=password");
            }
            if(!preg_match("/^[a-zA-ZëË_]*$/", $username)){
                $error = 1;
                header("Location: ../signin.php?error=use_just_letters_and_spaces");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error = 1;
                header("Location: ../signin.php?error=enter_valid_email");
            }
            if(strlen($password) < 6){
                $error = 1;
                header("Location: ../signin.php?error=enter_6_or_more_characters_on_password");
            }
            if($error == 0)
            {
              // $password = md5($password);//encrypt i passwordit para se ta ruajme ne database
                
                //Kujdes te veqant tek insertimi i te dhenave!!!
               
                    $regist ="INSERT INTO user_login (username,email,password)
                    VALUES ('$username','$email','$password')";
                    
                        mysqli_query($connect,$regist);
                        $_SESSION['myEmail'] = $email;
                        header("Location: confirmEmail.php");
        
                   }
            }
    ?>
    