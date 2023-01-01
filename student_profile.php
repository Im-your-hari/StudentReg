<?php error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING); ?> 

<?php


    session_start();
    $user_name = $_SESSION['username'];
    //echo $user_name; //Ith databasil username field aayi kodukkanam

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
       
      // Include config file
      require_once "config.php";
      //include("config.php");

      $std_name = $_POST["std_name"];
      $std_age = $_POST["std_age"];
      $std_dob = $_POST["std_dob"];
      $std_image = $_POST["std_image"];
      $file = $_FILES["std_image"]["name"];




      $query = "insert into admission_data values('$user_name','$std_name','$std_age','$std_dob','$file')";
      $avi = mysqli_query($con,$query);
      if($avi) {
        move_uploaded_file($_FILES['std_image']['tmp_name'],"./images/$file");
        echo "Success";
        header("location:index.php");
      }else{
        echo "You've already registered...";
        //header("location:index.php");
        
      }
      //header("location:index.php");
?>

