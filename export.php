<!DOCTYPE html>

<head>
	<title>Student Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
    rel="stylesheet"
    />
</head>


<?php

    session_start();
    require('vendor/autoload.php');
    require('config.php');
    include('include.php');

    $get_data = "SELECT * FROM admission_data where username='".$_SESSION['username']."'";
    $run_data = mysqli_query($con,$get_data);
    $row = mysqli_fetch_array($run_data);

    //$content = "<h1>Username :: ".$row["username"]."</h1><br>";
    //$content .= "<h1>Name :: ".$row["name"]."</h1><br>";
    //$content .= "<h1>Age :: ".$row["age"]."</h1><br>";
    //$content .= "<h1>DoB :: ".$row["dob"]."</h1><br>";
    //$content .= "<h1>Image :: ".$row["image"]."</h1><br>";
    //$content .= "<img src='images/".$row["image"]."'><br>";
    /*$content = "<body></body><section style="."background-color: #eee;".">
    <div class="."container py-5".">
      <div class="."row".">
        <div class="."col-lg-4".">
          <div class="."card mb-4".">
            <div class="."card-body text-center".">
              <img src="."./images/IMG_20220415_124841_001.jpg" ."
                class="."rounded-circle img-fluid" ."style="."width: 150px; height=150px".">
              <h4 class="."my-3".">".$row["name"]."</h4>
              <p class="."text-muted mb-4".">@".$_SESSION["username"]."</p>
            </div>
          </div>
        </div>
        <div class="."col-lg-8".">
          <div class="."card mb-4".">
            <div class="."card-body".">
              <div class="."row".">
                <div class="."col-sm-3".">
                  <p class="."mb-0".">Full Name</p>
                </div>
                <div class="."col-sm-9".">
                  <p class="."text-muted mb-0".">".$row["name"]."</p>
                </div>
              </div>
              <hr>
              <div class="."row".">
                <div class="."col-sm-3".">
                  <p class="."mb-0".">Email</p>
                </div>
                <div class="."col-sm-9".">
                  <p class="."text-muted mb-0".">".$row["email"]."</p>
                </div>
              </div>
              <hr>
              <div class="."row".">
                <div class="."col-sm-3".">
                  <p class="."mb-0".">Date Of Birth</p>
                </div>
                <div class="."col-sm-9".">
                  <p class="."text-muted mb-0".">".$row["dob"]."</p>
                </div>
              </div>
              <hr>
              <div class="."row".">
                <div class="."col-sm-3".">
                  <p class="."mb-0".">Phone</p>
                </div>
                <div class="."col-sm-9".">
                  <p class="."text-muted mb-0".">".$row["phone"]."</p>
                </div>
              </div>
              <hr>
              <div class="."row".">
                <div class="."col-sm-3".">
                  <p class="."mb-0".">Address</p>
                </div>
                <div class="."col-sm-9".">
                  <p class="."text-muted mb-0".">".$row["address"]."</p>
                </div>
              </div>
              <hr>
              <div class="."row".">
                <div class="."col-sm-3".">
                  <p class="."mb-0".">Nationality</p>
                </div>
                <div class="."col-sm-9".">
                  <p class="."text-muted mb-0".">".$row["nationality"]."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section></body>";*/
    $content = "";

    
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($content);
    //$file=time().'.pdf';
    $file="ABC".'.pdf';
    $mpdf->output($file,'D');

?>