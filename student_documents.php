<?php
    echo "Document page<br>";
    echo $_GET["username"];
    $stduname = $_GET["username"];

    include('config.php');


    $handle1 = opendir('hsfile');


    $get_data = "SELECT * FROM admission_data where username='".$stduname."'";
    $run_data = mysqli_query($con,$get_data);

    $row = mysqli_fetch_array($run_data);


    //Files going to archieve.......
    //$image_file = "images/pass.png";
    //$image_file_name = "pass.png";
    //$stdsign_file = "stdsign/sign.jpg";
    //$stdsign_file_name = "sign.jpg";
    $ntf = "neet/admitcard_pdf.pdf";
    $ntf_name = "admitcard_pdf.pdf";

    $image_file = "images/".$row['image'];
    $image_file_name = "StudentImage_".$row['image'];

    $stdsign_file = "stdsign/".$row['s-sign'];
    $stdsign_file_name = "StudentSign_".$row['s-sign'];

    $gd_sign_file = "gdsign/".$row['g-sign'];
    $gd_sign_file_name = "GuardianSign_".$row['g-sign'];

    $hs_file = "hsfile/".$row['hs-file'];
    $hs_file_name = "Plustwo_".$row['hs-file'];

    $neet_file = "neet/".$row['neet-file'];
    $neet_file_name = "Neet_".$row['neet-file'];


    //Zip file making
    $zip_file = "zipfile/".$stduname."_documents.zip";
    touch($zip_file);


    $zip = new ZipArchive;
    $this_zip = $zip->open($zip_file,ZipArchive::CREATE | ZipArchive::OVERWRITE);

    if ($this_zip){
        //$zip->addFile($ntf,$ntf_name);
        $zip->addFile($stdsign_file,$stdsign_file_name);
        $zip->addFile($image_file,$image_file_name);
        $zip->addFile($gd_sign_file,$gd_sign_file_name);
        $zip->addFile($hs_file, $hs_file_name);
        //print $hs_file;
        $zip->addFile($neet_file,$neet_file_name);//Add more files with paths
        
    }
    $zip->close();

    //Download zip file
    if(file_exists($zip_file)){
        $demo_name = $zip_file;
        header('Content-type: application/zip');
        header('Content-Disposition: attachment; filename="'.$demo_name.'"');
        readfile($zip_file);

    }

    //Delete zip file after download
    unlink($zip_file);

?>

