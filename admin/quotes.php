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
                <th>Quote Id</th>
                <th>Quote Message</th>
                <th>Quote Upload</th>
                <th>Quote from</th>
                <th>Quote Proffesion</th>
                <th>Update File</th>
                <th>Delete File</th>
            </tr>
            </thead>
            <tbody>
            <?php
                include "db.php";
                
                $select = "SELECT * FROM quotes;";
                
                $query = mysqli_query($connect, $select);
                
                while($row = mysqli_fetch_array($query))
                {
                    $id = $row['qId'];
                    $qMessage = $row['qMessage'];
                    $fileUpload = $row['qImage'];
                    $qFrom = $row['qFrom'];
                    $qProffesion = $row['qProffesion'];
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><img src="../file/<?php echo $fileUpload; ?>" width="80" height="60"></td>
                <td style="width:300px"><?php echo $qMessage; ?></td>
                <td><?php echo $qFrom; ?></td>
                <td><?php echo $qProffesion ?></td>
                <td><a href="updateQ.php?update=<?php echo $id; ?>">Update</a></td>
                <td><button onclick="deleteProduct(<?php echo $id?>);" value="Delete">Delete</button></td>
            </tr>
              <?php  } ?>
              </tbody>
        </table>
        <a href="./addQ.php"><button style="width:100px;height:40px;background-color:lightblue;margin-left:50px;"><b>SHTO QUOTE</b></button></a>
        <a href="./"><button style="width:70px;height:30px;background-color:lightblue;margin-left:20px;"><b>Back</b></button></a>
        <script language="JavaScript" type="text/javascript">
            
            function deleteProduct(deleteId){
                
                if(confirm('A jeni te sigurt?')){
                    document.location.href = 'deleteQ.php?delete='+deleteId;
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