<?php

include("config.php");
session_start();

//echo "Check Admin<br>";
$username = trim($_POST['username']);
//echo $username;
$password = trim($_POST['password']);
//echo $password;

$get_data = "SELECT * FROM admins"; //where username='".$username."'";
//echo "<hr>".$get_data;
$run_data = mysqli_query($con,$get_data);
//echo $run_data;
while($row = mysqli_fetch_array($run_data)){
    if($username==trim($row['username']) && $password==trim($row['passwword'])){
        $_SESSION["adminlogin"] = True;
        header("location: admin.php");
        
    }
    else{
        echo '<script>alert("Invalid Credentials..!")</script>';
        $_SESSION["adminlogin"] = False;
        header("location:admin_login.php");
    }
}










?>
