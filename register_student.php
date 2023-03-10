

<!--DOCTYPE html>
<html>

<body>
      <form action="student_profile.php" method="post" enctype="multipart/form-data">

      <input type="text" name="std_name" placeholder="Enter name"><br>
      <input type="number" name="std_age" placeholder="Enter age"><br>
      <input type="date" name="std_dob" placeholder="xx:xx:xxxx"><br>
      <input type="file" name="std_image" placeholder="image.jpg"><br>
      <input type="submit" name="Register">
      </form>
</body>

</html-->

<!--Form Template-->
<!DOCTYPE html>
<html lang="en">
<head>
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
<link rel="stylesheet" href="style.css" />
    <title>Reg Form</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                  <form action="student_profile.php" method="post" enctype="multipart/form-data">
      
                    <div class="row">
                        <div class="col-12 p-2 ">
                          <div class="form-outline">
                              <input type="Name" name="std_name" id="std_name" class="form-control form-control-lg" />
                              <label class="form-label" for="std_name">Name</label>
                            </div>
                        </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline datepicker w-100">
                          <input type="date" name="std_dob" class="form-control form-control-lg" id="birthdayDate"/>
                          <label for="birthdayDate" class="form-label">Birthday</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender: </h6>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="std_gender" id="femaleGender"
                            value="option1" checked />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="std_gender" id="maleGender"
                            value="option2" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="std_gender" id="otherGender"
                            value="option3" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="email" name="std_email" id="emailAddress" class="form-control form-control-lg" />
                          <label class="form-label" for="emailAddress">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="tel" name="std_phoneNumber" id="phoneNumber" class="form-control form-control-lg" />
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
      
                      </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" name="nationality" id="Nationality" class="form-control form-control-lg" />
                            <label class="form-label" for="Nationality">Nationality</label>
                          </div>
        
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" name="mstatus" id="Marital-Status" class="form-control form-control-lg" />
                            <label class="form-label" for="Marital-Status">Marital Status</label>
                          </div>
        
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" name="caste" id="Religion&caste" class="form-control form-control-lg" />
                            <label class="form-label" for="Religion&caste">Religion & Caste</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" name="m-tongue" id="MotherTongue" class="form-control form-control-lg" />
                            <label class="form-label" for="Marital-Status">Mother Tongue</label>
                          </div>
        
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" name="guadian" id="Guadian" class="form-control form-control-lg" />
                            <label class="form-label" for="Guadian">Name of Guadian</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" name="r-w-Student" id="Relation" class="form-control form-control-lg" />
                            <label class="form-label" for="Relation">Relation with Student</label>
                          </div>
        
                        </div>
                    </div>


                    <div class="row pb-2">
                        <div class="col-12">
                          <div class="form-outline">
                              <input type="text" name="category" id="category" class="form-control form-control-lg" />
                              <label class="form-label" for="category">Belongs to SC/ST/OBC</label>
                            </div>
                        </div>
                      </div>

                    <div class="row">

                        <div class="col-md-6 mb-4 pb-2">
        
                            <div class="form-outline">
                              <input type="address" name="address" id="Address" class="form-control form-control-lg" />
                              <label class="form-label" for="Address">Address</label>
                            </div>
          
                          </div>
                        
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="address" name="p-address" id="PAddress" class="form-control form-control-lg" />
                            <label class="form-label" for="PAddress">Permanent Address</label>
                          </div>
        
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                          <div class="form-outline">
                            <input type="text" name="k-rank" id="K-Rank" class="form-control form-control-lg" />
                            <label class="form-label" for="K-Rank">KEAM Medical Rank</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text"  name="k-roll" id="k-Roll" class="form-control form-control-lg" />
                            <label class="form-label" for="k-Roll">KEAM Roll no</label>
                          </div>
         
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                          <div class="form-outline">
                            <input type="text" name="a-rank" id="A-Rank" class="form-control form-control-lg" />
                            <label class="form-label" for="A-Rank">Ayurveda Rank</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" name="n-roll" id="Neet-no" class="form-control form-control-lg" />
                            <label class="form-label" for="Neet-no">NEET Roll no</label>
                          </div>
        
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                          <div class="form-outline">
                            <input type="text" name="n-rank" id="NEET-Rank" class="form-control form-control-lg" />
                            <label class="form-label"  for="NEET-Rank">NEET Rank</label>
                          </div>
                        </div>

                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" name="percentile" id="Percentile-score" class="form-control form-control-lg" />
                            <label class="form-label" for="Percentile-score">Percentile Score</label>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                          <div class="form-outline">
                            <input type="text" id="+2marks" name="plustwo-marks" class="form-control form-control-lg" />
                            <label class="form-label" for="+2marks">Percentage of marks in +2</label>
                          </div>
                        </div>

                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" name="isSanskrit" id="isSanckrit" class="form-control form-control-lg" />
                            <label class="form-label" for="isSanckrit">Have you studied Sanskrit as optional language for Higher Secondary</label>
                          </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                          <div class="form-outline">
                            <input type="text" name="isAyurvedic" id="Ayurvedic-tradition" class="form-control form-control-lg" />
                            <label class="form-label" for="Ayurvedic-tradition">Have you got Ayurvedic tradition (if yes give the details)</label>
                          </div>
                        </div>

                        <div class="col-md-6 mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" name="extra-activities" id="Extra-Activities" class="form-control form-control-lg" />
                            <label class="form-label" for="Extra-Activities">Extra Curricular Activities</label>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 p-2">

                          <div class="form-outline ">
                            <label for="Student Image" class="form-label">Student Image</label>
                            <input class="form-control" type="file" name="s-image" id="Student Image"  />
                          </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                          <div class="form-outline">
                            <label for="Student Signature" class="form-label">Student Signature</label>
                            <input class="form-control" type="file" name="s-sign" id="Student Signature"  />
                          </div>
                        </div>

                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                              <label for="Guadian-sign" class="form-label">Guadian Signature</label>
                              <input class="form-control" type="file" name="g-sign" id="Guadian-sign"  />
                            </div>
                          </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                          <div class="form-outline">
                            <label for="NEET" class="form-label">NEET Application</label>
                            <input class="form-control" type="file" name="neet-file" id="NEET"  />
                          </div>
                        </div>

                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                              <label for="+2" class="form-label">Higher Secondary Certificate</label>
                              <input class="form-control" type="file" name="hs-file" id="+2"  />
                            </div>
                          </div>
                    </div>
   

      
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
</html>