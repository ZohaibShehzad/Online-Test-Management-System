<?php
session_start();
include "views/header.php";
include 'connection.php';

if(isset($_SESSION['super']))
{
$cnic = $_SESSION['super'];

// $first_name = $_POST['scale']; 
  //$cnic = $_POST['p_cnic'];  

$Rdata = "SELECT * FROM userslogin WHERE cnic=$cnic";
$RdataResult  = mysqli_query($conn, $Rdata);
$Rdata1 = "SELECT * FROM personalinfo WHERE cnic=$cnic";
$RdataResult1  = mysqli_query($conn, $Rdata1);
$Rdata2 = "SELECT * FROM academic WHERE cnic=$cnic";
$RdataResult2  = mysqli_query($conn, $Rdata2);
$Rdata3 = "SELECT * FROM language WHERE cnic=$cnic";
$RdataResult3  = mysqli_query($conn, $Rdata3);
}
else
{
     echo "<script>location.href='signuplogin.php' </script>";
}

?>



<link href="tables/css/tablestyle.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link href="stylesidenav.css" rel="stylesheet">



<div id="mySidenav" class="sidenav">
      <a href="biodataform.php" id="about">Form</a>
      <a href="status.php" id="blog">Status</a>
      <a href="challan.php" id="projects">Challan</a>
      <a href="instruction.php" id="contact">Instruction</a>
       <a href="logout.php" id="logout">Logout</a>
</div>



<div class="container" style="padding-left:50px;padding-top:20px;">
      <div class="row">
            <div class="col-md-25">
                  <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Punjab Pharmacy Council Punjab (Pharmacy Council Conduction of
                                          20th & 18th Pharmacy Technicians Examinations (Supplementary) 2019)</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                              <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                    <form id="biodataform" action="savedata.php" method="post" class="" enctype="multipart/form-data">
                                          <div>
                                                <label style="text-align: center; display:block; font-size:30px"> Application form</label>
                                          </div>

                                          <?php
                                          if (mysqli_num_rows($RdataResult) > 0) {
                                                while ($rows = mysqli_fetch_assoc($RdataResult)) {
                                                      $count = 1;
                                                      $button = $rows['button'];
                                                      echo $button;
                                          ?>
                                                      <!-- Till 180 line number it contain personal infromation form data pick the id's and with the help of these id's store into database table name as personalinfo -->
                                                      <div style="padding-top: 30px">
                                                            <label for="fullname" style="padding-left: 50px; padding-right:50px; width:250px">POST Name</label>
                                                            <input value="<?php echo $rows['postname'] ?>" style="width: 350px; height:40px" type="text" id="postname" class="form-control" readonly="readonly">
                                                      </div>
                                          <?php
                                                     
                                                }
                                          }
                                          if (mysqli_num_rows($RdataResult1) > 0) {
                                                while ($rows = mysqli_fetch_assoc($RdataResult1)) {
                                          ?>
                                          
                                                      <div>
                                                            <strong> PERSONAL INFORMATION </strong>
                                                      </div>

                                                      <div style="padding-top: 30px">
                                                            <label for="fullname" style="padding-left: 50px; padding-right:50px; width:250px">NAME IN FULL</label>
                                                            <input value="<?php echo $rows['name'] ?>" readonly="readonly" style="width: 350px; height:40px" type="text" id="fullname" class="form-control" name="name" placeholder="Full name here" oninvalid="this.setCustomValidity('Please enter full name')" oninput="this.setCustomValidity('')">
                                                      </div>
                                                      <div>
                                                            <label for="fname" style="padding-left: 50px; padding-right:50px; width:250px">FATHER'S NAME</label>
                                                            <input value="<?php echo $rows['father_name'] ?>" readonly="readonly" style="width: 350px; height:40px" type="text" id="fname" class="form-control" name="fatherName" placeholder="Father's name here" oninvalid="this.setCustomValidity('Please enter Father name')" oninput="this.setCustomValidity('')">
                                                      </div>
                                                      <div>
                                                            <label for="cnic" style="padding-left: 50px; padding-right:50px; width:250px">CNIC#</label>
                                                            <input value="<?php echo $rows['cnic'] ?>" readonly="readonly" style="width: 350px; height:40px" type="text" id="cnic" name="p_cnic" class="form-control">
                                                      </div>
                                          
                                          <div>
                                                <label for="dob" style="padding-left: 50px; padding-right:50px; width:250px">DATE OF BIRTH</label>
                                                <input value="<?php echo $rows['dob'] ?>" readonly="readonly" style="width: 350px; height:40px" type="date" id="dob" name="dob" class="form-control" oninvalid="this.setCustomValidity('Please enter Date of Birth')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="gender" style="padding-left: 50px; padding-right:50px; width:250px">GENDER</label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="ogender" value="<?php echo $rows['gender'] ?>" readonly="readonly" checked><?php echo $rows['gender'] ?>
                                                </label>
                                          </div>
                                          <div>
                                                <label for="disability" style="padding-left: 50px; padding-right:50px; width:250px">ANY DISABILITY</label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="dis" value="<?php echo $rows['disability'] ?>" readonly="readonly" checked><?php echo $rows['disability'] ?>
                                                </label>
                                          </div>
                                          <div>
                                                <label for="email" style="padding-left: 50px; padding-right:50px; width:250px">EMAIL</label>
                                                <input value="<?php echo $rows['email'] ?>" readonly="readonly" style="width: 350px; height:40px" type="email" id="e_mail" class="form-control" name="email" placeholder="Emter Email here" oninvalid="this.setCustomValidity('Please Enter Email here')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="paddress" style="padding-left: 50px; padding-right:50px; width:250px">POSTAL ADDRESS</label>
                                                <input value="<?php echo $rows['postal_address'] ?>" readonly="readonly" style="width: 350px; height:40px" type="text" id="paddress" class="form-control" name="postaladdress" placeholder="Enter Postal Address here" oninvalid="this.setCustomValidity('Please Enter Postal Address gere')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="city" style="padding-left: 50px; padding-right:50px; width:250px">CITY</label>
                                                <input value="<?php echo $rows['city'] ?>" readonly="readonly" style="width: 350px; height:40px" type="text" id="city" class="form-control" name="city" placeholder="Enter City name here" oninvalid="this.setCustomValidity('Please Enter City  name')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="district" style="padding-left: 50px; padding-right:50px; width:250px">DISTRICT</label>
                                                <input value="<?php echo $rows['district'] ?>" readonly="readonly" style="width: 350px; height:40px" type="text" id="district" class="form-control" name="district" placeholder="Enter District name here" oninvalid="this.setCustomValidity('Please Enter District  name')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="phone" style="padding-left: 50px; padding-right:50px; width:250px">TELEPHONE NO</label>
                                                <input value="<?php echo $rows['telephone'] ?>" readonly="readonly" style="width: 350px; height:40px" type="text" id="phone" class="form-control" name="tel" placeholder="Enter Telephone (RES) number without Dash (-) here" oninvalid="this.setCustomValidity('Please Enter Residence Number without Dash(-)')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="cell" style="padding-left: 50px; padding-right:50px; width:250px">MOBILE NO</label>
                                                <input value="<?php echo $rows['cellno'] ?>" readonly="readonly" minlength="11" maxlength="11" style="width: 350px; height:40px" type="text" id="cell" class="form-control" name="cell" placeholder="Enter Cell number without Dash (-) here" oninvalid="this.setCustomValidity('Please Enter Cell Number without Dash(-)')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>

                                                <label for="religion" style="padding-left: 50px; padding-right:50px; width:250px">RELEGION</label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="rel" checked readonly="readonly" value="<?php echo $rows['religion'] ?>"><?php echo $rows['religion'] ?>
                                                </label>
                                          </div>

                                          <div>
                                                <label for="service" style="padding-left: 50px; padding-right:50px; width:450px">ARE YOU A GOVT. SERVING EMPLOYEE? </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="service" checked readonly="readonly" value="<?php echo $rows['serving'] ?>" ><?php echo $rows['serving'] ?>
                                                </label>
                                          </div>
                                          <?php
                                                     
                                                }
                                          }
                                          else{
                                          ?>
                                          <div>
                                                            <strong> PERSONAL INFORMATION </strong>
                                                      </div>

                                                      <div style="padding-top: 30px">
                                                            <label for="fullname" style="padding-left: 50px; padding-right:50px; width:250px">NAME IN FULL</label>
                                                            <input required style="width: 350px; height:40px" type="text" id="fullname" class="form-control" name="name" placeholder="Full name here" oninvalid="this.setCustomValidity('Please enter full name')" oninput="this.setCustomValidity('')">
                                                      </div>
                                                      <div>
                                                            <label for="fname" style="padding-left: 50px; padding-right:50px; width:250px">FATHER'S NAME</label>
                                                            <input required style="width: 350px; height:40px" type="text" id="fname" class="form-control" name="fatherName" placeholder="Father's name here" oninvalid="this.setCustomValidity('Please enter Father name')" oninput="this.setCustomValidity('')">
                                                      </div>
                                                      <div>
                                                            <label for="cnic" style="padding-left: 50px; padding-right:50px; width:250px">CNIC#</label>
                                                            <input required style="width: 350px; height:40px" type="text" id="cnic" name="p_cnic" class="form-control" placeholder="13 digit CNIC here without dashes" oninvalid="this.setCustomValidity('Please enter CNIC')" oninput="this.setCustomValidity('')">
                                                      </div>
                                          
                                          <div>
                                                <label for="dob" style="padding-left: 50px; padding-right:50px; width:250px">DATE OF BIRTH</label>
                                                <input required style="width: 350px; height:40px" type="date" id="dob" name="dob" class="form-control" oninvalid="this.setCustomValidity('Please enter Date of Birth')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="gender" style="padding-left: 50px; padding-right:50px; width:250px">GENDER</label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="ogender" value="Male" checked>Male
                                                </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="ogender" value="Female">Female
                                                </label>
                                          </div>
                                          <div>
                                                <label for="gender" style="padding-left: 50px; padding-right:50px; width:250px">ANY DISABILITY</label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="dis" value="NO" checked>NO
                                                </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="dis" value="YES">YES
                                                </label>
                                          </div>
                                          <div>
                                                <label for="email" style="padding-left: 50px; padding-right:50px; width:250px">EMAIL</label>
                                                <input required style="width: 350px; height:40px" type="email" id="e_mail" class="form-control" name="email" placeholder="Emter Email here" oninvalid="this.setCustomValidity('Please Enter Email here')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="paddress" style="padding-left: 50px; padding-right:50px; width:250px">POSTAL ADDRESS</label>
                                                <input required style="width: 350px; height:40px" type="text" id="paddress" class="form-control" name="postaladdress" placeholder="Enter Postal Address here" oninvalid="this.setCustomValidity('Please Enter Postal Address gere')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="city" style="padding-left: 50px; padding-right:50px; width:250px">CITY</label>
                                                <input required style="width: 350px; height:40px" type="text" id="city" class="form-control" name="city" placeholder="Enter City name here" oninvalid="this.setCustomValidity('Please Enter City  name')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="district" style="padding-left: 50px; padding-right:50px; width:250px">DISTRICT</label>
                                                <input required style="width: 350px; height:40px" type="text" id="district" class="form-control" name="district" placeholder="Enter District name here" oninvalid="this.setCustomValidity('Please Enter District  name')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="phone" style="padding-left: 50px; padding-right:50px; width:250px">TELEPHONE NO</label>
                                                <input required style="width: 350px; height:40px" type="text" id="phone" class="form-control" name="tel" placeholder="Enter Telephone (RES) number without Dash (-) here" oninvalid="this.setCustomValidity('Please Enter Residence Number without Dash(-)')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <div>
                                                <label for="cell" style="padding-left: 50px; padding-right:50px; width:250px">MOBILE NO</label>
                                                <input required minlength="11" maxlength="11" style="width: 350px; height:40px" type="text" id="cell" class="form-control" name="cell" placeholder="Enter Cell number without Dash (-) here" oninvalid="this.setCustomValidity('Please Enter Cell Number without Dash(-)')" oninput="this.setCustomValidity('')">
                                          </div>
                                          
                                          <div>

                                                <label for="religion" style="padding-left: 50px; padding-right:50px; width:250px">RELEGION</label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="rel" checked value="MUSLIM">MUSLIM
                                                </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="rel" value="CHRISTIAN">CHRISTIAN
                                                </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="rel" value="Other">OTHER(SCHELDULE CAST)
                                                </label>
                                          </div>

                                          <div>
                                                <label for="service" style="padding-left: 50px; padding-right:50px; width:450px">ARE YOU A GOVT. SERVING EMPLOYEE? </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="service" value="YES">YES
                                                </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="service" checked value="NO"> NO
                                                </label>

                                          </div>
                                          <?php
                                          }
                                          ?>
                                          <div>
                                                <label for="Eservice" style="padding-left: 50px; padding-right:50px; width:450px">TOTAL EXPERIENCE INCASE OF YES </label>
                                                <input style="width: 350px; height:40px" type="text" id="cell" class="form-control" name="experience" placeholder="Enter Experince here incase of YES">

                                          </div>


                                          <div>
                                                <label for="armed" style="padding-left: 50px; padding-right:50px; width:450px">RETIRED FROM PAKISTAN ARMED FORCES ?</label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="armed" value="YES">YES
                                                </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="armed" checked value="NO">NO
                                                </label>

                                          </div>

                                          <div>
                                                <label for="Aservice" style="padding-left: 50px; padding-right:50px; width:450px">TOTAL EXPERIENCE INCASE OF YES </label>
                                                <input style="width: 350px; height:40px" type="text" id="cell" class="form-control" name="exp" placeholder="Enter Experince here incase of YES">

                                          </div>


                                          <div>
                                                <label for="gov" style="padding-left: 50px; padding-right:50px; width:450px">WIDOW/SON/DAUGHTER OF DECEASED GOVT. EMPLOYEE</label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="gov" value="YES">YES
                                                </label>
                                                <label class="radio-inline">
                                                      <input type="radio" name="gov" checked value="NO">NO
                                                </label>

                                          </div>

                                          <!--  Line till 412 contain academic info all the id's are set already you just need to pick that and one thing you have to save with cnic and degree title as well e.g SSC .HSSC -->

                                          <div style="padding-top: 50px">
                                                <strong> ACADEMIC INFORMATION (MANDATORY) </strong>
                                                <p>Note: STTS will not issue Roll No. slips to those who have not filled in their academic records properly. <br />
                                                      &nbsp &nbsp &nbsp &nbsp Candidate should convert their CGPA/Grades into marks. <br />
                                                      &nbsp &nbsp &nbsp &nbsp Write exact Degree name and Major Subject mentioned in certificate / transcript. <br />
                                                      &nbsp &nbsp &nbsp &nbsp In case the academic information is incomplete, Your applicatin will be declined</p>
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 30px; padding-right:0px; width:140px">NAME OF DEGREE</label>
                                                <label for="ssc" style="padding-left: 0px; padding-right:40px; width:190px">INSTITUTE</label>
                                                <label for="ssc" style="padding-left: 50px; padding-right:20px; width:190px">DEGREE TITLE</label>
                                                <label for="ssc" style="padding-left: 40px; padding-right:30px; width:150px">MAJOR SUBJECT</label>
                                                <label for="ssc" style="padding-left: 30px; padding-right:20px; width:90px">PASSING YEAR</label>
                                                <label for="ssc" style="padding-left: 40px; padding-right:20px; width:90px">TOTAL MARKS</label>
                                                <label for="ssc" style="padding-left: 40px; padding-right:20px; width:90px">MARKS OBTAINED</label>
                                                <label for="ssc" style="padding-left: 40px; padding-right:20px; width:90px">GRADE/<br />DIV/CGPA</label>


                                          </div>
                                          <?php
                                          if (mysqli_num_rows($RdataResult2) > 0) {
                                                while ($row = mysqli_fetch_assoc($RdataResult2)) {
                                          ?>
                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 20px; padding-right:80px; width:0px"><strong><?php echo $row['degree']?></strong></label>

                                                <input value="<?php echo $row['institute']?>" readonly="readonly" style="width: 240px; height:40px" type="text" id="sscinstitute" class="form-control" name="sscinstitute" placeholder="Enter Institute" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input value="<?php echo $row['degree']?>" readonly="readonly" style="width: 180px; height:40px" type="text" id="sscdegree" class="form-control" name="sscdegree" placeholder="Enter Degree Title" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input value="<?php echo $row['major']?>" readonly="readonly" style="width: 165px; height:40px" type="text" id="sscmajor" class="form-control" name="sscmajor" placeholder="Enter Major Subjects" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input value="<?php echo $row['passingyear']?>" readonly="readonly" style="width: 100px; height:40px;" type="text" id="sscpassyear" class="form-control" name="sscpassingyear" placeholder="e.g 2013" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input value="<?php echo $row['totalmarks']?>" readonly="readonly" style="width: 100px; height:40px" type="text" id="ssctotalmarks" class="form-control" name="ssctotalmarks" placeholder="e.g 1100" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">

                                                <input value="<?php echo $row['marksobtained']?>" readonly="readonly" style="width: 80px; height:40px" type="text" id="sscmarksobtained" class="form-control" name="sscmarksobtained" placeholder="" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                                <input value="<?php echo $row['grade']?>" readonly="readonly" style="width: 70px; height:40px" type="text" id="sscgrade" class="form-control" name="sscgrade" placeholder="Grade" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                          </div>
                                          <?php
                                                }
                                          }
                                          else{
                                          ?>
                                          
                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 20px; padding-right:80px; width:0px"><strong>SSC </strong></label>

                                                <input required style="width: 240px; height:40px" type="text" id="sscinstitute" class="form-control" name="sscinstitute" placeholder="Enter Institute" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input required style="width: 180px; height:40px" type="text" id="sscdegree" class="form-control" name="sscdegree" placeholder="Enter Degree Title" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input required style="width: 165px; height:40px" type="text" id="sscmajor" class="form-control" name="sscmajor" placeholder="Enter Major Subjects" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input required style="width: 100px; height:40px;" type="text" id="sscpassyear" class="form-control" name="sscpassingyear" placeholder="e.g 2013" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input required style="width: 100px; height:40px" type="text" id="ssctotalmarks" class="form-control" name="ssctotalmarks" placeholder="e.g 1100" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">

                                                <input required style="width: 80px; height:40px" type="text" id="sscmarksobtained" class="form-control" name="sscmarksobtained" placeholder="" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                                <input required style="width: 70px; height:40px" type="text" id="sscgrade" class="form-control" name="sscgrade" placeholder="Grade" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 20px; padding-right:80px; width:0px"><strong>HSSC </strong></label>
                                                <input required style="width: 240px; height:40px" type="text" id="hsscinstitute" class="form-control" name="hsscinstitute" placeholder="Enter Institute" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 180px; height:40px" type="text" id="hsscdegree" class="form-control" name="hsscdegree" placeholder="Enter Degree Title" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 165px; height:40px" type="text" id="hsscmajor" class="form-control" name="hsscmajor" placeholder="Enter Major Subjects" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 100px; height:40px;" type="text" id="hsscpassyear" class="form-control" name="hsscpassyear" placeholder="e.g 2013" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 100px; height:40px" type="text" id="hssctotalmarks" class="form-control" name="hssctotalmarks" placeholder="e.g 1100" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 80px; height:40px" type="text" id="hsscmarksobtained" class="form-control" name="hsscmarksobtained" placeholder="" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 70px; height:40px" type="text" id="hsscgrade" class="form-control" name="hsscgrade" placeholder="Grade" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">


                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 20px; padding-right:80px; width:0px"><strong>Bachelors </strong></label>
                                                <input style="width: 240px; height:40px" type="text" id="hsscinstitute" class="form-control" name="bscinstitute" placeholder="Enter Institute" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 180px; height:40px" type="text" id="hsscdegree" class="form-control" name="bscdegree" placeholder="Enter Degree Title" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 165px; height:40px" type="text" id="hsscmajor" class="form-control" name="bscmajor" placeholder="Enter Major Subjects" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 100px; height:40px;" type="text" id="hsscpassyear" class="form-control" name="bscpassyear" placeholder="e.g 2013" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 100px; height:40px" type="text" id="hssctotalmarks" class="form-control" name="bsctotalmarks" placeholder="e.g 1100" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 80px; height:40px" type="text" id="hsscmarksobtained" class="form-control" name="bscmarksobtained" placeholder="" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 70px; height:40px" type="text" id="hsscgrade" class="form-control" name="bscgrade" placeholder="Grade" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">


                                          </div>


                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 20px; padding-right:80px; width:0px"><strong>MS/<br />M.PHIL </strong></label>
                                                <input style="width: 240px; height:40px" type="text" id="hsscinstitute" class="form-control" name="mscinstitute" placeholder="Enter Institute" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 180px; height:40px" type="text" id="bsdegree" class="form-control" name="mscdegree" placeholder="Enter Degree Title" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 165px; height:40px" type="text" id="bsmajor" class="form-control" name="mscmajor" placeholder="Enter Major Subjects" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 100px; height:40px;" type="text" id="bspassyear" class="form-control" name="mscpassyear" placeholder="e.g 2013" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 100px; height:40px" type="text" id="bstotalmarks" class="form-control" name="msctotalmarks" placeholder="e.g 1100" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 80px; height:40px" type="text" id="bsmarksobtained" class="form-control" name="mscmarksobtained" placeholder="" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 70px; height:40px" type="text" id="bsgrade" class="form-control" name="mscgrade" placeholder="Grade" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">


                                          </div>


                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 20px; padding-right:80px; width:0px"><strong>PHD </strong></label>
                                                <input style="width: 240px; height:40px" type="text" id="msinstitute" class="form-control" name="phdinstitute" placeholder="Enter Institute" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 180px; height:40px" type="text" id="msdegree" class="form-control" name="phddegree" placeholder="Enter Degree Title" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 165px; height:40px" type="text" id="msmajor" class="form-control" name="phdmajor" placeholder="Enter Major Subjects" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 100px; height:40px;" type="text" id="mspassyear" class="form-control" name="phdpassyear" placeholder="e.g 2013" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 100px; height:40px" type="text" id="mstotalmarks" class="form-control" name="phdtotalmarks" placeholder="e.g 1100" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 80px; height:40px" type="text" id="msmarksobtained" class="form-control" name="phdmarksobtained" placeholder="" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 70px; height:40px" type="text" id="msgrade" class="form-control" name="phdgrade" placeholder="Grade" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">


                                          </div>


                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 20px; padding-right:80px; width:0px"><strong>OTHERS </strong></label>
                                                <input style="width: 240px; height:40px" type="text" id="phdinstitute" class="form-control" placeholder="Enter Institute" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 180px; height:40px" type="text" id="phddegree" class="form-control" placeholder="Enter Degree Title" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 165px; height:40px" type="text" id="phdmajor" class="form-control" placeholder="Enter Major Subjects" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 100px; height:40px;" type="text" id="phdpassyear" class="form-control" placeholder="e.g 2013" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 100px; height:40px" type="text" id="phdtotalmarks" class="form-control" placeholder="e.g 1100" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 80px; height:40px" type="text" id="phdmarksobtained" class="form-control" placeholder="" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">

                                                <input style="width: 70px; height:40px" type="text" id="phdgrade" class="form-control" placeholder="Grade" oninvalid="this.setCustomValidity('Please enter Obtained Marks')" oninput="this.setCustomValidity('')">
                                          

                                          </div>
                                          <?php
                                          }
                                          ?>

                                          <div style="padding-top: 20px">
                                                <label><strong>Language (A=Excellent, B=Good, C=Fair</strong></label>
                                          </div>

                                          <div style="padding-top: 1px">
                                                <label for="lan" style="padding-left: 30px; padding-right:0px; width:140px">S.NO</label>
                                                <label for="lan" style="padding-left: 0px; padding-right:40px; width:200px">Name of Language</label>
                                                <label for="lan" style="padding-left: 60px; padding-right:20px; width:150px">Read</label>
                                                <label for="lan" style="padding-left: 50px; padding-right:50px; width:150px">Write</label>
                                                <label for="lan" style="padding-left: 40px; padding-right:20px; width:150px">Speak</label>
                                                <label for="lan" style="padding-left: 40px; padding-right:20px; width:250px">Certificate/<br />Diploma,if any</label>
                                          </div>
                                          <?php
                                          if (mysqli_num_rows($RdataResult3) > 0) {
                                                $count = 1;
                                                while ($row = mysqli_fetch_assoc($RdataResult3)) {
                                          ?>
                                          <div style="padding-top: 30px">
                                                <label for="lan" style="padding-left: 40px; padding-right:80px; width:0px"><strong><?php echo $count?> </strong></label>
                                                <input value="<?php echo $row['l_name']?>" readonly="readonly" style="width: 240px; height:40px" type="text" name="namelanguage1" class="form-control" name="lname" placeholder="Enter Language" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp;
                                                <input value="<?php echo $row['l_read']?>" readonly="readonly" style="width: 70px; height:40px" type="text" name="lread1" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input value="<?php echo $row['l_write']?>" readonly="readonly" style="width: 70px; height:40px" type="text" name="lwrite1" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input value="<?php echo $row['l_speak']?>" readonly="readonly" style="width: 70px; height:40px;" type="text" name="lspeak1" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input value="<?php echo $row['certificate']?>" readonly="readonly" style="width: 150px; height:40px" type="text" name="ldiploma1" class="form-control" placeholder="" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <?php
                                                $count +=1;
                                                }
                                          }
                                          else{
                                          ?>
                                          <div style="padding-top: 30px">
                                                <label for="lan" style="padding-left: 40px; padding-right:80px; width:0px"><strong>1 </strong></label>
                                                <input required style="width: 240px; height:40px" type="text" name="namelanguage1" class="form-control" name="lname" placeholder="Enter Language" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp;
                                                <input required style="width: 70px; height:40px" type="text" name="lread1" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input required style="width: 70px; height:40px" type="text" name="lwrite1" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input required style="width: 70px; height:40px;" type="text" name="lspeak1" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 150px; height:40px" type="text" name="ldiploma1" class="form-control" placeholder="" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="lan" style="padding-left: 40px; padding-right:80px; width:0px"><strong>2 </strong></label>
                                                <input style="width: 240px; height:40px" type="text" id="namelanguage2" class="form-control" placeholder="Enter Language" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px" type="text" id="lread2" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px" type="text" id="lwrite2" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px;" type="text" id="lspeak2" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 150px; height:40px" type="text" id="ldiploma2" class="form-control" placeholder="" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 40px; padding-right:80px; width:0px"><strong>3 </strong></label>
                                                <input style="width: 240px; height:40px" type="text" id="namelanguage3" class="form-control" placeholder="Enter Language" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px" type="text" id="lread3" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px" type="text" id="lwrite3" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px;" type="text" id="lspeak3" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 150px; height:40px" type="text" id="ldiploma3" class="form-control" placeholder="" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 40px; padding-right:80px; width:0px"><strong>4 </strong></label>
                                                <input style="width: 240px; height:40px" type="text" id="namelanguage4" class="form-control" placeholder="Enter Language" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px" type="text" id="lread4" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px" type="text" id="lwrite4" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 70px; height:40px;" type="text" id="lspeak4" class="form-control" placeholder="e.g A,B,C" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">

                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input style="width: 150px; height:40px" type="text" id="ldiploma4" class="form-control" placeholder="" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>
                                          <?php
                                          }
                                          ?>
                                          <div style="padding-top: 20px">
                                                <label><strong>Employement Information (if Applicable):</strong></label>
                                          </div>

                                          <div style="padding-top: 1px">
                                                <label for="ssc" style="padding-left: 30px; padding-right:0px; width:140px">S.NO</label>
                                                <label for="ssc" style="padding-left: 0px; padding-right:40px; width:200px">Organization Type<br />Govt./Private/ <br />Semi Govt.</label>
                                                <label for="ssc" style="padding-left: 40px; padding-right:20px; width:150px">Organization Name</label>
                                                <label for="ssc" style="padding-left: 50px; padding-right:50px; width:150px">Designation</label>
                                                <label for="ssc" style="padding-left: 40px; padding-right:20px; width:150px">Start Date</label>
                                                <label for="ssc" style="padding-left: 40px; padding-right:20px; width:250px">End Date</label>
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 40px; padding-right:80px; width:0px"><strong>1 </strong></label>
                                                <input style="width: 200px; height:40px" type="text" id="exp1" class="form-control" placeholder="Organization Type" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 220px; height:40px" type="text" id="lread1" class="form-control" placeholder="Organization Name" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 130px; height:40px" type="text" id="lwrite1" class="form-control" placeholder="Designation" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 140px; height:40px;" type="date" id="lspeak1" class="form-control" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 140px; height:40px" type="date" id="ldiploma1" class="form-control" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 40px; padding-right:80px; width:0px"><strong>2 </strong></label>
                                                <input style="width: 200px; height:40px" type="text" id="namelanguage1" class="form-control" placeholder="Organization Type" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 220px; height:40px" type="text" id="lread1" class="form-control" placeholder="Organization Name" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 130px; height:40px" type="text" id="lwrite1" class="form-control" placeholder="Designation" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 140px; height:40px;" type="date" id="lspeak1" class="form-control" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 140px; height:40px" type="date" id="ldiploma1" class="form-control" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 40px; padding-right:80px; width:0px"><strong>3 </strong></label>
                                                <input style="width: 200px; height:40px" type="text" id="namelanguage1" class="form-control" placeholder="Organization Type" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 220px; height:40px" type="text" id="lread1" class="form-control" placeholder="Organization Name" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 130px; height:40px" type="text" id="lwrite1" class="form-control" placeholder="Designation" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 140px; height:40px;" type="date" id="lspeak1" class="form-control" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 140px; height:40px" type="date" id="ldiploma1" class="form-control" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 40px; padding-right:80px; width:0px"><strong>4 </strong></label>
                                                <input style="width: 200px; height:40px" type="text" id="namelanguage1" class="form-control" placeholder="Organization Type" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 220px; height:40px" type="text" id="lread1" class="form-control" placeholder="Organization Name" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 130px; height:40px" type="text" id="lwrite1" class="form-control" placeholder="Designation" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 140px; height:40px;" type="date" id="lspeak1" class="form-control" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 140px; height:40px" type="date" id="ldiploma1" class="form-control" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>

                                          <div style="padding-top: 30px">
                                                <label for="ssc" style="padding-left: 40px; padding-right:80px; width:0px"><strong>5 </strong></label>
                                                <input style="width: 200px; height:40px" type="text" id="namelanguage1" class="form-control" placeholder="Organization Type" oninvalid="this.setCustomValidity('Please enter Institute name')" oninput="this.setCustomValidity('')">


                                                <input style="width: 220px; height:40px" type="text" id="lread1" class="form-control" placeholder="Organization Name" oninvalid="this.setCustomValidity('Please enter Degree Title name')" oninput="this.setCustomValidity('')">

                                                <input style="width: 130px; height:40px" type="text" id="lwrite1" class="form-control" placeholder="Designation" oninvalid="this.setCustomValidity('Please enter Major subjects')" oninput="this.setCustomValidity('')">

                                                <input style="width: 140px; height:40px;" type="date" id="lspeak1" class="form-control" oninvalid="this.setCustomValidity('Please enter Passing Year')" oninput="this.setCustomValidity('')">


                                                <input style="width: 140px; height:40px" type="date" id="ldiploma1" class="form-control" oninvalid="this.setCustomValidity('Please enter Total marks')" oninput="this.setCustomValidity('')">
                                          </div>

                                          <div style="padding-top: 25px">
                                                <strong>Picture Upload</strong>
                                                <p style="padding-top: 15px">Choose the picture to upload</p>
                                                <div class="custom-file">
                                                      <input name="uploadfile" required type="file" style="color:#6BDD73" aria-describedby="pic">

                                                </div>
                                          </div>

                                          <div style="padding-top: 50px">
                                                <strong> UNDERTAKING BY THE APPLICANT </strong>
                                                <p>
                                                      I do hereby solemnly declare that all the information provided by me in this application form and all the additional
                                                      particulars/documents/certificates furnished along with it are true to the best of my knowledge and belief and nothing has
                                                      been concealed. If any wrong or incorrect information is found later, I shall be liable to disciplinary action which may result
                                                      in cancellation of my candidature and even my employment.

                                                </p>
                                          </div>



                                          <input type="checkbox" id="checkme" class="form-check-input" />
                                          <label for="c">I read all the instructions</label>
                                          <div style="padding-left: 400px ; padding-top:20px">
                                                <button type="submit" name="hi" form="biodataform" id="send" class="btn btn-primary btn-sm" disabled>Submit</button>
                                          </div>
                                    </form>
                              </div>

                              <script>
                               var value = <?php echo json_encode($button); ?>;

                                    if (value == 1) {
                                          sendbtn.disabled = true;
                                    }
                                    var checker = document.getElementById('checkme');
                                    var sendbtn = document.getElementById('send');
                                    checker.onchange = function() {
                                          if (checker.checked) {
                                                sendbtn.disabled = false;
                                          } else {
                                                sendbtn.disabled = true;
                                          }
                                    };
                              </script>


                        </div>
                  </div>
            </div>
      </div>

</div>




<?php
include "views/footer.php";
?>