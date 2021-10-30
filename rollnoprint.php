<?php
ob_start();
session_start();
include 'connection.php';
// $strValue = $_GET['id'];
// this NEEDS TO BE AT THE TOP of the page before any output etc
$pid = $_SESSION['rollno'];

//if Varible is empty then go to Result Check page.
if (empty($pid)) {
    header('Location: rollnoslip.php');
}
unset($_SESSION['rollno']);
session_destroy();
ob_end_flush();
?>

<style>
      @media print {
    html, body {
        height: 99%;    
    }
}

.print{
    page-break-after: always;
}
</style>



<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/logo2.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div style="display:block ;  text-align:right ; padding-top: 15px;padding-right: 20px">
<a href="#" class="btn btn-info btn-lg" id="printpagebutton" type= "button" value="Print this page" onclick="printpage()">
          <span class="glyphicon glyphicon-print"></span> Print
        </a>
</div>
    <?php
    /*   $Rdata = "SELECT * FROM usersdetail INNER JOIN test on usersdetail.Uid=test.Uid INNER JOIN result on usersdetail.Uid=result.Uid  ";
                  $RdataResult  = mysqli_query($conn,$Rdata); */
 //   $Rdata = "SELECT * FROM picture WHERE picture.cnic=$pid";
    $Rdata = "SELECT * FROM picture, personalinfo ,test WHERE picture.cnic=$pid and personalinfo.cnic=$pid and test.cnic=$pid" ;
    $RdataResult  = mysqli_query($conn, $Rdata);
    if(mysqli_num_rows($RdataResult)>0){
        while($rows = mysqli_fetch_assoc($RdataResult)) 
        {
            $folder = $rows['img_dir'];
            $name = $rows['img_name'];
           $path = $folder.$name;

    ?>

    <div class="container" style="display: inline-block;text-align: center">
        <div>
            <h3>STRATEGIC TESTING SERVICES</h3>
            <h5>Private Test</h5>
        </div>
        <table class="table table-bordered">
            <th colspan="10" style="background-color:lightblue !important">
            </th>

            <tbody>
                <tr>
                    <td style="width: 20%"> <strong> Rollno </strong></td>
                    <td style="width: 50%"> <strong> <?php echo 1 ?> </strong></td>
                    <td style="width: 20%;padding-top:2% " rowspan=7><img src="<?php echo $path ?>" alt="" style="width:250px; height:250px;"></td>
                </tr>
       
                <tr>
                    <td> <strong> Name </strong></td>
                    <td style="width: 50%"> <strong> <?php echo $rows['name'] ?> </strong></td>

                </tr>
                <tr>
                    <td> <strong> Father's Name </strong></td>
                    <td style="width: 50%"> <strong> <?php echo $rows['father_name'] ?>  </strong></td>

                </tr>
                <tr>
                    <td> <strong> CNIC </strong></td>
                    <td style="width: 50%"> <strong><?php echo $pid ?></strong></td>

                </tr>
                <tr>
                    <td> <strong> Paper Type </strong></td>
                    <td style="width: 50%"> <strong> <?php echo $rows['Type'] ?> </strong></td>

                </tr>
                <tr>
                    <td> <strong> Test Date </strong></td>
                    <td style="width: 50%"> <strong> <?php echo $rows['father_name'] ?> </strong></td>

                </tr>
                <tr>
                    <td> <strong> Reporting Time </strong></td>
                    <td style="width: 50%"> <strong> Name </strong></td>

                </tr>
                <tr>

                    <td> <strong> Test Center </strong></td>
                    <td colspan="2"> <strong> <?php echo $rows['TestAddress'] ?> </strong></td>

                </tr>
            </tbody>
            <th colspan="10" style="background-color:lightblue !important">
            </th>
        </table>
    </div>
    <?php 
    }}
 ?>

 <div>
     INSTRUCTIONS

 </div>




<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }

    $(document).on('keydown', function(e) {
    if(e.ctrlKey && (e.key == "p" || e.charCode == 16 || e.charCode == 112 || e.keyCode == 80) ){
        alert("Please use the Print PDF button below for a better rendering on the document");
        e.cancelBubble = true;
        e.preventDefault();

        e.stopImmediatePropagation();
    }  
})
</script>