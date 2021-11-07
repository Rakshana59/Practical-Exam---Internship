<?php

if(isset($_POST["name"]) || (isset($_POST["branch"]) || (isset($_POST["code"]) || (isset($_POST["acc_no"]) )))) {

   $name = $_POST['name'];
   $branch = $_POST['branch'];
   $code = $_POST['code'];
   $acc_no = $_POST['acc_no'];
}
   //database connection
   $conn = new mysqli('localhost','root','','bank_db');
   if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
   }else{
      $stmt = $conn->prepare("INSERT INTO bank(name, branch, code, acc_no)values(?,?,?,?)");
      $stmt->bind_param("ssii",$name ,$branch, $code, $acc_no);
      $stmt->execute();
      echo "<script>window.open('details.php',' _self')</script>";
      $stmt->close();
      $conn->close();

   }