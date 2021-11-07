<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Bank</title>
</head>
<body>
   <div class="container-view">
        <div class="title">View details</div>

    <?php
    if(isset($_GET["id"])){

        $id =$_GET['id'];

    $conn = mysqli_connect("localhost", "root","","bank_db");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }

    $sql = "SELECT  name,branch,code,acc_no FROM bank WHERE id=".$id;
    }
    $result = $conn->query($sql) or die($conn->close());
    ?>

        <table class="table">
            <div>
                <?php
                    while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td class="detail">Name</td>
                        <td><?php echo $row['name']; ?></td>
                    </tr>
                    <tr>
                        <td class="detail">Bank Branch</td>
                        <td><?php echo $row['branch']; ?></td>
                    </tr>
                    <tr>
                        <td class="detail">Bank Code</td>
                        <td><?php echo $row['code']; ?></td></tr>
                    </tr>
                    <tr>
                        <td class="detail">Account Number</td>
                        <td><?php echo $row['acc_no']; ?></td></tr>
                    </tr>
                <?php endwhile; ?>
            </div>
        </table>

        <a href="details.php"><button class="btn-back">Back</button></a>


   </div> 
</body>

</html>