<?php  
session_start();

if(isset($_POST['login']))  
{  
    $username=$_POST['uname'];  
    $password=sha1($_POST['pword']);  
  
    $conn = mysqli_connect("localhost", "root","","bank_db");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }

    $sql="SELECT uname,pword FROM user WHERE uname='$username'AND pword='$password'";  
  
    $run=mysqli_query($conn,$sql);  
  
    if(mysqli_num_rows($run))  
    {  
        $_SESSION['uname']=$username;
        header('location: details.php');  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";
    }  
} 
?>

<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <form action="" method="post">
        <h2>LOGIN</h2>
        <label>USERNAME</label>
        <input type="text" name="uname"><br>

        <label>PASSWORD</label>
        <input type="password" name="pword"><br>

        <button type="submit" name="login">Login</button>
    </form>



</body>
</html>