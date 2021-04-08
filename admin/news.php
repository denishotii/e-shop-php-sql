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
        <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<table border='1'class="content-table" style='border:2px solid black;float:left;'>
<thead>
            <tr>
                <th>News Id</th>
                <th>News Name</th>
                <th>News Upload</th>
                <th>Description</th>
                <th>Update File</th>
                <th>Delete File</th>
            </tr>
            </thead>
            <tbody>
            <?php
                include "db.php";
                
                $select = "SELECT * FROM shopnews;";
                
                $query = mysqli_query($connect, $select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['nId'];
                    $fileName = $row['nName'];
                    $fileUpload = $row['nImage'];
                    $description = $row['nText'];
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $fileName; ?></td>
                <td><img src="../file/<?php echo $fileUpload; ?>" width="80" height="60"></td>
                <td style="width:300px"><?php echo $description; ?></td>
                <td><a href="updateN.php?update=<?php echo $id; ?>">Update</a></td>
                <td><button onclick="deleteProduct(<?php echo $id?>);" value="Delete">Delete</button></td>
            </tr>
              <?php  } ?>
              </tbody>
        </table>
        <a href="./addN.php"><button style="width:100px;height:40px;background-color:lightblue;margin-left:50px;"><b>SHTO LAJM</b></button></a>
        <a href="./"><button style="width:70px;height:30px;background-color:lightblue;margin-left:20px;"><b>Back</b></button></a>
        <script language="JavaScript" type="text/javascript">
            
            function deleteProduct(deleteId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'deleteN.php?delete='+deleteId;
                    return true;
                }
            }
        </script>
        <script type="text/javascript">
        function goBack() {
          window.history.back();
        }
    </script>
    <script>

    </script>
        </body>
        <?php 
    }
        ?>
</html>