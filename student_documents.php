<?php
    echo "Document page<br>";
    echo $_GET["username"];
    $stduname = $_GET["username"];

    $image_file = "images/pass.png";
    $image_file_name = "pass.png";
    $stdsign_file = "stdsign/sign.jpg";
    $stdsign_file_name = "sign.jpg";


    //Zip file making
    $zip_file = "zipfile/".$stduname."_documents.zip";
    touch($zip_file);


    $zip = new ZipArchive;
    $this_zip = $zip->open($zip_file);

    if ($this_zip){
        $zip->addFile($stdsign_file,$stdsign_file_name);
        $zip->addFile($image_file,$image_file_name);//Add more files with paths
        
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