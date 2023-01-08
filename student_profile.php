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


      //Data only
      $std_name = $_POST["std_name"];
      //$std_age = $_POST["std_age"];
      $std_dob = $_POST["std_dob"];
      $std_gender = $_POST["std_gender"];
      $std_email = $_POST["std_email"];
      $std_phoneNumber = $_POST["std_phoneNumber"];
      $nationality = $_POST["nationality"];
      $mstatus = $_POST["mstatus"];
      $caste = $_POST["caste"];
      $m_tongue = $_POST["m-tongue"];
      $guadian = $_POST["guadian"];
      $r_w_Student = $_POST["r-w-Student"];
      $category = $_POST["category"];
      $address = $_POST["address"];
      $p_address = $_POST["p-address"];
      $k_rank = $_POST["k-rank"];
      $k_roll = $_POST["k-roll"];
      $a_rank = $_POST["a-rank"];
      $n_roll = $_POST["n-roll"];
      $n_rank = $_POST["n-rank"];
      $percentile = $_POST["percentile"];
      $plustwo_marks = $_POST["plustwo-marks"];
      $isSanskrit = $_POST["isSanskrit"];
      $isAyurvedic = $_POST["isAyurvedic"];
      $extra_activities = $_POST["extra-activities"];
      //'$address','$p_address','$k_rank','$k_roll','$a_rank','$n_roll','$n_rank','$percentile','$plustwo_marks','$isSanskrit','$isAyurvedic','$extra_activities'


      //File Data
      $std_image = $_POST["std_image"];
      $s_sign = $_POST["s-sign"];
      $g_sign = $_POST["g-sign"];
      $neet_file = $_POST["neet-file"];
      $hs_file = $_POST["hs-file"];

      //Files
      $img_file = $_FILES["std_image"]["name"];
      $s_sign_file = $_FILES["s-sign"]["name"];
      $g_sign_file = $_FILES["g-sign"]["name"];
      $neet_file_img = $_FILES["neet-file"]["name"];
      $hs_file_img = $_FILES["hs-file"]["name"];


      //Need to add data in the order of database...
      $query = "insert into admission_data values('$user_name','$std_name','$std_dob','$img_file','$std_gender','$std_email','$std_phoneNumber','$nationality','$mstatus','$caste','$m_tongue','$guadian','$r_w_Student','$category','$address','$p_address','$k_rank','$k_roll','$a_rank','$n_roll','$n_rank','$percentile','$plustwo_marks','$isSanskrit','$isAyurvedic','$extra_activities','$s_sign_file','$g_sign_file',' $neet_file_img',' $hs_file_img')";
      $avi = mysqli_query($con,$query);
      if($avi) {
        move_uploaded_file($_FILES['std_image']['tmp_name'],"./images/$img_file");
        move_uploaded_file($_FILES['s-sign']['tmp_name'],"./stdsign/$s_sign_file");
        move_uploaded_file($_FILES['g-sign']['tmp_name'],"./gdsign/$g_sign_file");
        move_uploaded_file($_FILES['neet-file']['tmp_name'],"./neet/$neet_file_img");
        move_uploaded_file($_FILES['hs-file']['tmp_name'],"./hsfile/$hs_file_img");
        echo "Success";
        header("location:index.php");
      }else{
        echo "You've already registered...";
        //header("location:index.php");
        
      }
      //header("location:index.php");
?>

