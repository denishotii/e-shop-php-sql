<?php 
    session_start();
?>
<html>
    <head>
        <title>Update Password</title>
        <link rel="stylesheet" href="css/login.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    
    <body>
    <?php
        $connect=mysqli_connect("localhost","root","","login");
            mysqli_select_db($connect,"login");

        if(isset($_GET['update'])){

            $update_id = $_GET['update'];
            $userPassword = $_SESSION['password'];

            $select = "SELECT * FROM user_login WHERE id='$update_id' and password='$userPassword'";
	
            $query = mysqli_query($connect, $select);

            while($row=mysqli_fetch_array($query)){
	
    ?>
    <div class="wrapper">
         <div class="header">
             <div class="logo">
                 <p>I-shop | Change Password</p>
             </div>
         </div>
         <div class="main_container">
             <div class="main_item login_wrap" style="display: block;">
                 <div class="title">Ready to change your password</div>
                 <div class="form">
                     <form method="post" action="inc/updatePwd.inc.php?update=<?php echo $row['id'] ?>">
                         <div class="form_wrap" id="newPass">
                         <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                             <label for="password">New Password</label>
                             <div class="input_field">
                                 <input type="password" class="input" name="pwd" id="password">
                                 <i class="fas fa-key"></i>
                             </div>
                             <div class="error_msg" id="pw_err_msg"></div>
                         </div>
                         <div class="form_wrap">
                             <input id="in" name="update" type="submit" value="Change Password">
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
        <?php } }  ?>
    </body>
</html>