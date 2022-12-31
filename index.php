<?php

session_start();

// Check if the user is logged in, if not then redirect him to login page...
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include('config.php'); //Set up database connection...
//include('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css');
?>








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
</head>


<body>

<div class="container">
<a href="#"><img src="#" alt="" width="350px" ></a><br><hr>
<a href="logout.php" class="btn btn-success"><i class="fa fa-lock"></i> Logout</a>
<a href="register_student.php" class="btn btn-success"><i class="fa fa-lock"></i> Admission Form</a>
<a href="export.php" class="btn btn-success pull-right"><i class="fa fa-download"></i> Export Data</a>
<hr>


    <!-- View modal  -->
<?php 

//echo $_SESSION['username'];
//echo "<br>";
//echo $_SESSION['id'];

// <!-- profile modal start -->
$get_data = "SELECT * FROM student_data where u_f_name='".$_SESSION['username']."'";
$run_data = mysqli_query($con,$get_data);


while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
    echo $id."<br>";
    echo $_SESSION['id'];
	$card = $row['u_card'];
	$name = $row['u_f_name'];
	$name2 = $row['u_l_name'];
	$father = $row['u_father'];
	$mother = $row['u_mother'];
	$gender = $row['u_gender'];
	$email = $row['u_email'];
	$aadhar = $row['u_aadhar'];
	$Bday = $row['u_birthday'];
	$family = $row['u_family'];
	$phone = $row['u_phone'];
	$address = $row['u_state'];
	$village = $row['u_village'];
	$police = $row['u_police'];
	$dist = $row['u_dist'];
	$pincode = $row['u_pincode'];
	$state = $row['u_state'];
	$time = $row['uploaded'];
	
	$image = $row['image'];
	echo "
        <h1>$name</h1>
		


    ";
    /*
    echo $id,$name."
        &nbsp;
    ".$card."<br><hr>";
}
*/


// <!-- profile modal end -->

}
?>

</body>
</html>
