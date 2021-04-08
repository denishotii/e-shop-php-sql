<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=no_user");
    }else{
?>
<html>


<head>
    <title>I-shop | Users</title>
</head>
<body>
<table border='1' style='border:2px solid black;float:left;'>
            <tr>
                <td>User Id</td>
                <td>userame</td>
                <td>Email</td>
                <td>Password</td>
                <td>Is Email Confirmed</td>
                <td>Delete User</td>
            </tr>
            <?php
                include "db.php";
                
                $select = "SELECT * FROM user_login;";
                
                $query = mysqli_query($connect, $select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $isConfirmed = $row['confirm'];
                    if($isConfirmed == 1){
                        $conf = "Yes";
                    }else{
                        $conf = "No";
                    };
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $password ?></td>
                <td style="text-align: center;"><?php echo $conf ?></td>
                <td><button onclick="deleteProduct(<?php echo $id?>);" value="Delete">Delete</button></td>
            </tr>
              <?php  } ?>
        </table>
        <button onclick="goBack()" style="width:70px;height:30px;background-color:lightblue;margin-left:100px;"><b>Back</b></button>
        <script language="JavaScript" type="text/javascript">
            
            function deleteProduct(deleteId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'delete_user.php?delete='+deleteId;
                    return true;
                }
            }
        </script>
        </body>
        <?php 
    }
        ?>
    <script type="text/javascript">
        function goBack() {
          window.history.back();
        }
    </script>
</html>