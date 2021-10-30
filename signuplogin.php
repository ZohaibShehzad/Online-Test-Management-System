
<?php
session_start();
include "views/header.php";
include 'connection.php';
$error = "";
if(isset($_SESSION['error'])){
    $error = $_SESSION['error'];
}

?>

<link href="tables/css/screensplitter.css" rel="stylesheet">
<link href="tables/css/tablestyle.css" rel="stylesheet">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<div class="container" style="padding-top: 40px">

    <div class="col-md-15">
        <div class="tab" role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Punjab Pharmacy Council Punjab (Pharmacy Council Conduction of
                        20th & 18th Pharmacy Technicians Examinations (Supplementary) 2019)</a></li>
            </ul>
        </div>

    </div>
</div>


<div class="flex-container" style="padding-top: 2px;padding-bottom: 20px">
    <div class="column">
        <form action="signuplogincheck.php" method="post" id="reload">
            <div style="text-align: center;padding-bottom: 20px">
                <label style="font-size:30px;">Signup</label>
            </div>

            <label for="text">Select Post</label>
            <select id="scale" name="scale">
                <option value="scale14">Scale 14</option>
                <option value="scale15">Scale 15</option>
                <option value="scale16">Scale 16</option>
                <option value="scale17">Scale 17</option>
            </select>
            <br /><br />
            <center><label for="cnic">Enter CNIC without Dashes</label></center>
            <center> <input style="width: 350px; height:40px" type="text" name="sp_cnic" id="sp_cnic" class="form-control" pattern="^\d{13}$" required maxlength="13" minlength="13" placeholder="13 digit CNIC no without dashes" oninvalid="this.setCustomValidity('Please enter cnic witout dash')" oninput="this.setCustomValidity('')"> </center>
            <center> <label for="pass">Password</label></center>
            <center><input style="width: 350px; height:40px" type="text" name="password" id="password" class="form-control" minlength="8" placeholder="Enter Password here" oninvalid="this.setCustomValidity('Please enter password min length 8')" oninput="this.setCustomValidity('')"></center>

            <center> <label for="pass" style="padding-left: 20px; padding-right:20px">Repeat Password</label></center>
            <center> <input style="width: 350px; height:40px" type="text" id="rpassword" class="form-control" minlength="8" placeholder="Enter Password here" oninvalid="this.setCustomValidity('Please enter password min length 8')" oninput="this.setCustomValidity('')"></center>



            <div style="padding-top:20px;text-align:center">
                <button style="padding-left: 700px" type="submit" form="reload" class="btn btn-primary btn-sm">Signup</button>
            </div>
        </form>

    </div>
    <div class="column bg-alt">
        <form action="signuplogincheck.php" method="post" id="scaleform">
        <div style="text-align: center;padding-bottom: 20px">
                <label style=" font-size:30px;">Login</label>
            </div>


            <label for="text" style="padding-left: 50px; padding-right:50px; padding-top: 10px">Select Post</label>
            <select id="scale" name="scale">
                <option value="scale14">Scale 14</option>
                <option value="scale15">Scale 15</option>
                <option value="scale16">Scale 16</option>
                <option value="scale17">Scale 17</option>
            </select>

            <br /><br />
            <center><label for="cnic">Enter CNIC without Dashes</label></center>
          <center>  <input style="width: 350px; height:40px" type="text" name="p_cnic" id="p_cnic" class="form-control" pattern="^\d{13}$" required maxlength="13" minlength="13" placeholder="13 digit CNIC no without dashes" oninvalid="this.setCustomValidity('Please enter cnic witout dash')" oninput="this.setCustomValidity('')" required></center>


    <center> <label for="loginpassword" style="padding-left: 50px; padding-right:50px">Password</label></center>
      <center>      <input style="width: 350px; height:40px" type="text" name="loginpassword" id="loginpassword" class="form-control" minlength="8" placeholder="Enter Password here" oninvalid="this.setCustomValidity('Please enter password')" oninput="this.setCustomValidity('')" required></center>
    <center>  <label name="error" class="herror" style="color: red"><?php echo $error; ?></label></center>


            <div style=" padding-top:20px;text-align: center">
                <button type="submit" name="login" form="scaleform" class="btn btn-primary btn-sm">Login</button>
            </div>
        </form>
    </div>
</div>

<?php
include "views/footer.php";
?>

<script>
$(document).keypress(function(e) {
    $('.herror').hide();
    });
    </script>