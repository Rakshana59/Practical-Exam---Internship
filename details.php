<?php  
session_start();  
  
if(!$_SESSION['uname'])  
{  
    header("Location: index.php"); 
}  
  
?>

<html lang="en">
<head>

    <link rel="stylesheet" href="css/style.css">

    <title>Bank</title>
</head>
<body>
   <div class="container-user">
    <h5><a href="logout.php">logout</a></h5><br>
        <div class="group">
            <div class="title">Bank Details</div>
            <div>
                <a href="addbank.php"><button type="button" class="btn-create">Add Details</button></a>
            </div>
        </div>

    <?php 
    $conn = mysqli_connect("localhost", "root","","bank_db");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }
    $sql = "SELECT * FROM bank";
    $result = $conn->query($sql) or die($conn->close())
    ?>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Bank Branch</th>
            <th>Bank Code</th>
            <th>Account Number</th>
            <th></th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()): ?>
            <tr>
            <td>0<?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['code']; ?></td>
            <td><?php echo $row['acc_no']; ?></td>
            <td><p><a href="viewbank.php?id=<?php echo $row['id'];?>" class="btn-view">View</a></p></td>
            <td><p><a href="editbank.php?edit=<?php echo $row['id'];?>" class="btn-edit">Edit</a></p></td>
            <td><p><a href="deletebank.php?delete=<?php echo $row['id'];?>" class="btn-delete">Delete</a></p></td>
            </tr>
        <?php endwhile; ?>
    </table>
   </div> 
</body>

</html>