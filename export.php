<?php

    session_start();
    require('vendor/autoload.php');
    require('config.php');

    $get_data = "SELECT * FROM admission_data where username='".$_SESSION['username']."'";
    $run_data = mysqli_query($con,$get_data);
    $row = mysqli_fetch_array($run_data);

    $content = "<h1>Username :: ".$row["username"]."</h1><br>";
    $content .= "<h1>Name :: ".$row["name"]."</h1><br>";
    $content .= "<h1>Age :: ".$row["age"]."</h1><br>";
    $content .= "<h1>DoB :: ".$row["dob"]."</h1><br>";


    
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($content);
    $file=time().'.pdf';
    $mpdf->output($file,'D');

?>