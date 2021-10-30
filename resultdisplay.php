<?php
ob_start();
session_start();
    include "views/header.php";
    include 'connection.php';
   // $strValue = $_GET['id'];
     // this NEEDS TO BE AT THE TOP of the page before any output etc
    $pid = $_SESSION['superhero'];
    
    //if Varible is empty then go to Result Check page.
    if(empty($pid))
    {
      header('Location: resultcheck.php');   
    }
    unset($_SESSION['superhero']);
  session_destroy();
  ob_end_flush();
?>


<link href="tables/css/tablestyle.css" rel="stylesheet">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<div class="container" style="padding-top: 100px">
    <div class="row">
        <div class="col-md-25">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Punjab Pharmacy Council Punjab (Pharmacy Council Conduction of 
20th & 18th Pharmacy Technicians Examinations (Supplementary) 2019)</a></li>
                </ul>

                <?php
                /*   $Rdata = "SELECT * FROM usersdetail INNER JOIN test on usersdetail.Uid=test.Uid INNER JOIN result on usersdetail.Uid=result.Uid  ";
                  $RdataResult  = mysqli_query($conn,$Rdata); */
                  $Rdata = "SELECT * FROM result INNER JOIN personalinfo WHERE result.cnic=$pid and personalinfo.cnic=$pid " ;
                  $RdataResult  = mysqli_query($conn,$Rdata);

                  ?>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
					<table class="table table-striped w-auto">

<!--Table head-->
<thead>
  <tr>
	<th>Sr#</th>
    <th>Name</th>
    <th>CNIC</th>
	<th>Total Marks</th>
    <th>Obtained</th>
    <th>Percentile</th>
	
  </tr>
</thead>
<!--Table head-->
<?php
                      if(mysqli_num_rows($RdataResult)>0){
                    while($rows = mysqli_fetch_assoc($RdataResult)) 
                    {
                      $count = 1;
                  ?>
<!--Table body-->

<tbody>
  <tr class="table-info">
  <td>
                    <?php echo $count ?></td>
                      <td><?php echo $rows['name'] ?>
                      <td><?php echo $rows['cnic'] ?></td>
                      <td><?php echo $rows['TotalMarks'] ?></td>
                      <td class="text-primary"><?php echo $rows['Obtained'] ?></td>
                      <td class="text-primary"> <?php echo $rows['Percentile'] ?></td>
</tr>
   <?php 
   $count+1;
    }}
 ?>
  
</tbody>
<!--Table body-->
</table>
<!--Table-->
                    </div>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>




		<?php
	include "views/footer.php";
?>
