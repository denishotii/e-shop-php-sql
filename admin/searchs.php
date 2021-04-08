<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=no_user");
    }else{
?>
<html>


<head>
        <title>I-shop | Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<table border='1' style='border:2px solid black;float:left;'>
            <tr>
                <td>Search Id:</td>
                <td>Searched for:</td>
                <td>Times:</td>
            </tr>
            <?php
                include "db.php";
                
                $select = "SELECT * FROM search;";
                
                $query = mysqli_query($connect, $select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['Sid'];
                    $searched = $row['searched'];
                    $times = $row['times'];
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $searched; ?></td>
                <td><?php echo $times ?> Times</td>
            </tr>
              <?php  } ?>
        </table>
        <button onclick="goBack()" style="width:70px;height:30px;background-color:lightblue;margin-left:100px;"><b>Back</b></button>
        <script language="JavaScript" type="text/javascript">
            
            function deleteProduct(deleteId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'delete.php?delete='+deleteId;
                    return true;
                }
            }
        </script>
        <script type="text/javascript">
        function goBack() {
          window.history.back();
        }
    </script>
        </body>
        <?php 
    }
        ?>
</html>