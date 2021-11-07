<?php


$name='';
$branch='';
$code='';
$acc_no='';

if(isset($_GET['edit'])){
    $id=$_GET['edit'];

    $conn = mysqli_connect("localhost", "root","","bank_db");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }

    $sql = "SELECT * FROM bank WHERE id=$id";
    $result = $conn->query($sql) or die($conn->close());
    if(!empty($result)==1){
        $row = $result->fetch_array();
        $name = $row['name'];
        $branch = $row['branch'];
        $code = $row['code'];
        $acc_no = $row['acc_no'];
    }
}
if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$branch = $_POST['branch'];
	$code = $_POST['code'];
	$acc_no = $_POST['acc_no'];

    $conn = mysqli_connect("localhost", "root","","bank_db");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }
	$sql= "UPDATE bank SET name='$name', branch='$branch', code='$code', acc_no='$acc_no' WHERE id=$id";

    $result = $conn->query($sql) or  die($conn->close());
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Bank</title>
</head>
<body>
   <div class="container">
       <div class="title">Add details</div>
       <br>
       <form action="" method="POST">
            <div class="form">
                <div class="input-box">
                    <label>Bank Name</label>
                    <input type="text" class="input" name="name" value="<?php echo $name;?>" required>
                </div>
                <br>
                <div class="input-box">
                    <label>Branch</label>
                    <input type="text" class="input" name="branch" value="<?php echo $branch;?>" required>
                </div>
                <br>
                <div class="input-box">
                    <label>Branch Code</label>
                    <input type="int" class="input" name="code" value="<?php echo $code;?>" required>
                </div>
                <br>
                <div class="input-box">
                    <label>Account number</label>
                    <input type="int" class="input" name="acc_no" value="<?php echo $acc_no;?>" required>
                </div>
                <br>
                <div>
                    <button class="btn" type="submit" name="update">Update</button>
                </div>
            </div>

       </form>
   </div> 
</body>

</html>