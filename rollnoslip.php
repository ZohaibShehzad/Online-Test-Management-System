<?php
 session_start();
ob_start();
    include "views/header.php";
    include 'connection.php'; 
$totalmarks = "";
$marksobtained = "";
$cnic = "";
$error = "";
// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
   
    // id to search
    $id = $_POST['p_cnic'];
   
   $_SESSION['rollno'] = $id;
    
   
    
    // connect to mysql
    
    
    // mysql search query
    $Rdata = "SELECT * FROM picture WHERE cnic=$id " ;
    $RdataResult  = mysqli_query($conn,$Rdata);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($RdataResult)>0){
      

        while($rows = mysqli_fetch_assoc($RdataResult)) 
        {
            base64_encode($id);
            header('Location: rollnoprint.php');   
       
      }  
    }

    // if the id not exist
    // show a message and clear inputs
    else {
     
        $error = "Record not found";
            $lname = "";
            $age = "";
    }
    
    
    mysqli_free_result($RdataResult);
    
    
}

// in the first time inputs are empty
else{  
}
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
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                    <form action=""  id="result" method="post">

                  
                      <label for="cnic"  style="padding-left: 50px; padding-right:50px">Enter CNIC without Dashes</label>
                      <input style="width: 350px; height:40px"  type="text"  name="p_cnic" class="form-control"  pattern="^\d{13}$" required  maxlength="13" minlength="13" placeholder="13 digit CNIC no without dashes"
              oninvalid="this.setCustomValidity('Please enter cnic witout dash')"
              oninput="this.setCustomValidity('')" 
              >

              <!-- <input type="hidden" name="cnic" value="<?php  echo $cnic; ?>"> -->
              <label name="error" class="herror" style="color: red"><?php echo $error; ?></label>
              

             <div style="padding-left: 400px ; padding-top:20px">
             <button type="submit" class="btn btn-primary btn-sm" name="search" id="submit" form="result" value="">Search</button>
              </div>
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
$(document).keypress(function(e) {
    $('.herror').hide();
    });
    </script>   