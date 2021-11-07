<?php

    if(isset($_GET["delete"])){

        $id =$_GET['delete'];

    $conn = mysqli_connect("localhost", "root","","bank_db");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }

    $sql = "DELETE FROM bank WHERE id=$id";
    }
    $result = $conn->query($sql) or die($conn->close());

    echo "<script>window.open('details.php',' _self')</script>";
    
?>