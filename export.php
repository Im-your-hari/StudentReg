
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
    $random = random_int(1000,1099);
    $content = "<img src="."nangelil.png".">";
    //$content = "<center><img src="."clg.png"." style="."justify-content: center;"." height="."100"." width="."120"."><b>Nangelil Ayurveda Medical College Amano Kothamangalamm Nellikuzhi P.o., Ernakulam Dist Kerala State, India, PIN. 686691<br> Affiliated to Kerala University of Health Sciences, Thrissur Phone : O91 485 2822032, Principal +91 485 2817700, 0484-2978444, <br> Fax: 91 485 2822032 Email: nangelicollege@gmail.com/ collegedu@gmail.com, Website: www.nangelilayurvedamedicalcollege.org</b></center>";
    //$content = "<h1>Hai</h1>";
    $content .="<br><br>".date("d M Y") . "<br>";
    $content .=date("h:i:sa") . "<br><hr>";
    $content .= "<b>Application No : 10023</b>";
    //$content .= "images/".ltrim($row['image'])."";
    $content .= "<br><br><img src="."images/".$row['image']." width="."120px"." height="."120px"." align="."right"."><br>";
    $content .="<br><center><table border=1>";
    $content .="
<tr>
    <td>Student Registration Id</td>
    </td>
     <td>".$random."</td>
</tr>
<tr>
   <td> Student Name</td>
     <td>".$row["name"]."</td>
</tr>
<tr>
    <td>Date Of Birth</td>
    <td>".$row["dob"]."</td>
</tr>

<tr><td>Phone Number</td>
    <td>".$row["phone"]."</td>
</tr>

<tr><td>Email</td>
    <td>".$row["email"]."</td>
</tr>





<tr><td>Nationality &nbsp;&nbsp;</td>
    <td>".$row["nationality"]."</td>
</tr>

<tr><td>Marital Status &nbsp;&nbsp;</td>
    <td>".$row["mstatus"]."</td>
</tr>

<tr><td> Religion & Caste&nbsp;&nbsp;</td>
    <td>".$row["caste"]."</td>
</tr>

<tr><td>Mother Tongue&nbsp;&nbsp;</td>
    <td>".$row["mtongue"]."</td>
</tr>

<tr><td>Name of Guadian&nbsp;&nbsp;</td>
    <td>".$row["guadian"]."</td>
</tr>

<tr><td>Relation with Student&nbsp;&nbsp;</td>
    <td>".$row["relation"]."</td>
</tr>

<tr><td>Belongs to SC/ST/OBC&nbsp;&nbsp;</td>
    <td>".$row["category"]."</td>
</tr>

<tr><td>Address&nbsp;&nbsp;</td>
    <td>".$row["address"]."</td>
</tr>
<tr><td>Permanent Address&nbsp;&nbsp;</td>
    <td>".$row["address"]."</td>
</tr>

<tr><td>KEAM Medical Rank&nbsp;&nbsp;</td>
    <td>".$row["k-rank"]."</td>
</tr>

<tr><td>KEAM Roll no&nbsp;&nbsp;</td>
    <td>".$row["k-roll"]."</td>
</tr>

<tr><td>Ayurveda Rank&nbsp;&nbsp;</td>
    <td>".$row["a-rank"]."</td>
</tr>

<tr><td>NEET Roll no&nbsp;&nbsp;</td>
    <td>".$row["n-roll"]."</td>
</tr>

<tr><td>NEET Rank&nbsp;&nbsp;</td>
    <td>".$row["n-rank"]."</td>
</tr>

<tr><td>Percentile Score&nbsp;&nbsp;</td>
    <td>".$row["percentile"]."</td>
</tr>

<tr><td>Percentage of marks in +2&nbsp;&nbsp;</td>
    <td>".$row["plustwo-marks"]."</td>
</tr>

<tr><td>Have you studied Sanskrit as optional language for Higher Secondary&nbsp;&nbsp;</td>
    <td>".$row["isSanskrit"]."</td>
</tr>

<tr><td>Have you got Ayurvedic tradition (if yes give the details)&nbsp;&nbsp;</td>
    <td>".$row["isAyurvedic"]."</td>
</tr>
<tr><td>Extra Curricular Activities&nbsp;&nbsp;</td>
    <td>".$row["extra-activities"]."</td>
</tr>   
</table>
<center>";


    
    $mpdf = new \Mpdf\Mpdf();
    $stylesheet = file_get_contents('pdf.css');
    $mpdf->WriteHTML($stylesheet,1);
    $mpdf->WriteHTML($content,2);
    //$file=time().'.pdf';
    $file=$row["name"].'.pdf';
    $mpdf->output($file,'D');

?>