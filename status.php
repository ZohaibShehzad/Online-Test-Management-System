<?php
session_start();
include "views/header.php";
include 'connection.php';
if(isset($_SESSION['super']))
{
$pid = $_SESSION['super'];
echo $pid;
?>

<?php
/*   $Rdata = "SELECT * FROM usersdetail INNER JOIN test on usersdetail.Uid=test.Uid INNER JOIN result on usersdetail.Uid=result.Uid  ";
                  $RdataResult  = mysqli_query($conn,$Rdata); */
$Rdata = "SELECT * FROM personalinfo WHERE cnic=$pid";
$Rdata1 = "SELECT * FROM challan WHERE cnic=$pid and status = 'paid'";
$RdataResult  = mysqli_query($conn, $Rdata);
$RdataResult1  = mysqli_query($conn, $Rdata1);
if (mysqli_num_rows($RdataResult) > 0) {
    $num = 1;
} else {
    $num = 0;
}

if (mysqli_num_rows($RdataResult1) > 0) {
 
    $num1 = 1;
} else {

    $num1 = 0;
}

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



<div class="container" style="padding-left: 150px;padding-top: 20px">
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
                        <form id="status" action="" method="post" class="" style="height: 500px">
                            <div>
                                <label style="text-align: center; display:block;  font-size:30px">Status of Application</label>
                                <div style="padding-top: 50px;padding-left: 150px">
                                    <img style=" width:80px;border-radius:50%;" id='img' src=imageshown alt="Avatar">
                                    <!--    <img style=" width:80px;border-radius:50%;" src="images/12.jpg" alt="Avatar" id="submit"> -->
                                    <label style="padding-left: 50px" for="formsubmit" id=result><strong></strong></label>
                                </div>
                                <div style="padding-top: 50px;padding-left: 150px">
                                    <img style=" width:80px;border-radius:50%;" id='img1' src=imageshown1 alt="Avatar">
                                    <!--      <img style=" width:80px;border-radius:50%;" src="images/wrong.jpg" alt="Avatar" id="submit"> -->
                                    <label style="padding-left: 50px" for="formsubmit" id="result1"><strong></strong></label>
                                </div>
                            </div>


                            <!-- Till 180 line number it contain personal infromation form data pick the id's and with the help of these id's store into database table name as personalinfo -->
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>




</div>
<?php
include "views/footer.php";
?>

<script>
    var name = <?php echo json_encode($num); ?>;
    var name1 = <?php echo json_encode($num1); ?>;
    if (name == 1) {

        document.getElementById('result').innerHTML = 'Application is a Submitted';
        var imageshown = "images/12.jpg"
    } else {

        document.getElementById('result').innerHTML = 'Application is not Submitted';
        var imageshown = "images/wrong.jpg"
    }

    if (name1 == 1) {
        
document.getElementById('result1').innerHTML = 'Challan is assss Submitted';
var imageshown1 = "images/12.jpg"
} else {

document.getElementById('result1').innerHTML = 'Challan is not Submitted';
var imageshown1 = "images/wrong.jpg"
}

    document.getElementById('img').src = imageshown;
    document.getElementById('img1').src = imageshown1;
</script>