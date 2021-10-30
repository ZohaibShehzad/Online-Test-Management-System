<?php
session_start();
include 'connection.php';
if(isset($_SESSION['super']))
{
$pid = $_SESSION['super'];
$pid;
$Rdata = "SELECT * FROM challan WHERE cnic=$pid";
$RdataResult  = mysqli_query($conn, $Rdata);
$cid = 0;
if (mysqli_num_rows($RdataResult) > 0) {
    while ($rows = mysqli_fetch_assoc($RdataResult)) {
        $cid =   $rows['challanid'];
        $cid;
    }
} else {
    $num = 0;
}

}

else
{
     echo "<script>location.href='signuplogin.php' </script>";
}

?>



<link rel="icon" type="image/png" href="images/logo2.png">
<link href="tables/css/tablestyle.css" rel="stylesheet">
<link href="css/challan.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link href="stylesidenav.css" rel="stylesheet">
   
   
   

<style>
    table {
        padding: 5px
    }

    td {
        border: 1px solid black;
        text-align: left;
        padding: 1px;

    }
    
       @media print {
    html, body {
        height: 99%;    
    }
}

.print{
    page-break-after: always;
}
</style>






<div style="display:block ;  text-align:right">

<input id="printpagebutton" type="button" value="Print this page" onclick="printpage()"/>
</div>

<div class="container print">

    <div class="leftpane">
        <div>

            <div style="display: block; text-align: center">
                <label for=""> Strategic Testing Services <br /> STS copy </label>
            </div>

            <div style="padding-top: 30px">
            <label style="font-size: 12px"> Branch Code: __________________</label>
                <label style="font-size: 12px;padding-left:30px"> Date: ______ /______ /_________ </label> <br><br>
                <label style="font-size: 12px"> Branch Name: _______________________</label>
                <label style="display:block;text-align:center;padding-top:10px">Pcode:<?php echo $cid ?></label>
            </div>

            <div style="display: block; text-align: center;padding-top: 30px">
                <label style="font-size: 15px"> Online Deposit Copy</label> <br />
                <label style="font-size: 12px">Please deposit in only one bank & tick the relevant Bank</label>
            </div>
            <table>
                <tr>
                    <td style="width:200px;">
                        HBL
                        <img src="images/hbl.jpg" alt="Italian Trulli" style="width: 100px;height: 30px">
                    </td>
                    <td style="width: 300px;padding-left: 10px;padding-top: 10px;">
                        <label style="width:100px;height: 100px;border: 1px solid blue; padding-left: 5px">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label> Habib Bank Limited </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Remote Branch:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Title:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Number:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in Figures: </label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in words:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <label style="font-size: 12px">Note: Bank Service Charges Free of Cost</label>
                    </td>

                </tr>
            </table>
            <br />
            <table>
                <tr>
                    <td style="width:200px;">
                        ABL
                        <img src="images/abl.jpg" alt="Italian Trulli" style="width: 100px;height: 30px">
                    </td>
                    <td style="width: 300px;padding-left: 10px;padding-top: 10px;">
                        <label style="width:100px;height: 100px;border: 1px solid blue; padding-left: 5px">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label> Allied Bank Limited </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Remote Branch:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Title:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Number:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in Figures: </label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in words:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <label style="font-size: 12px">Note: Bank Service Charges Free of Cost</label>
                    </td>

                </tr>
            </table>
            <br />
            <ul style="display: inline-block;text-align: left;font-size: 11px">


                <li> The Bank Must Return STTS Copy to the Candidate</li>
                <li> Attach CNIC Copy with deposit slip</li>
                <li> Application Form will not be entertained without Original Deposit</li>
                <li> Application Form will not be entertained other than against cash payment.</li>
                <li> FBP Endorsement is required on All the Deposit Slips. </li>
                <li> Deposit it in any online country wide branches</li>
               <div style=" text-align: justify;
  text-justify: inter-word;">  <li>Cash should always be deposited at the respective counter and
                    electronic computer generated receipt printed through flatbed
                    printer on deposit slip/challan should be obtained before leaving
                    the counter, please be sure to check the receipt and satisfy that
                    complete details including account number and amount
                    deposited are correctly printed failing which the bank will not
                    be responsible </li> </div>
            </ul>
            <table style="padding-top: 30px">

                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">Applicant Name:</label>
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    </td>
                </tr>
                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px"> Applicant Father Name</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">CNIC No./Form B.No:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">Applied for:</label>
                    </td>
                    <td>

                    </td>
                </tr>


            </table>
            <div style="padding-top: 100px">
                _____________ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ______________ <br />
                <label style="font-size: 12px">Applicant Signature</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <label style="font-size: 12px">Cashier</label>
            </div>
        </div>
    </div>
    <div class="middlepane">
        <div>

            <div style="display: block; text-align: center">
                <label for=""> Strategic Testing Services <br /> STS copy </label>
            </div>

            <div style="padding-top: 30px">
            <label style="font-size: 12px"> Branch Code: __________________</label>
                <label style="font-size: 12px;padding-left:30px"> Date: ______ /______ /_________ </label> <br><br>
                <label style="font-size: 12px"> Branch Name: _______________________</label>
                 <label style="display:block;text-align:center;padding-top:10px">Pcode:<?php echo $cid ?></label>
            </div>

            <div style="display: block; text-align: center;padding-top: 30px">
                <label style="font-size: 15px"> Online Deposit Copy</label> <br />
                <label style="font-size: 12px">Please deposit in only one bank & tick the relevant Bank</label>
            </div>
            <table>
                <tr>
                    <td style="width:200px;">
                        HBL
                        <img src="images/hbl.jpg" alt="Italian Trulli" style="width: 100px;height: 30px">
                    </td>
                    <td style="width: 300px;padding-left: 10px;padding-top: 10px;">
                        <label style="width:100px;height: 100px;border: 1px solid blue; padding-left: 5px">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label> Habib Bank Limited </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Remote Branch:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Title:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Number:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in Figures: </label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in words:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <label style="font-size: 12px">Note: Bank Service Charges Free of Cost</label>
                    </td>

                </tr>
            </table>
            <br />
            <table>
                <tr>
                    <td style="width:200px;">
                        ABL
                        <img src="images/abl.jpg" alt="Italian Trulli" style="width: 100px;height: 30px">
                    </td>
                    <td style="width: 300px;padding-left: 10px;padding-top: 10px;">
                        <label style="width:100px;height: 100px;border: 1px solid blue; padding-left: 5px">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label> Allied Bank Limited </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Remote Branch:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Title:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Number:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in Figures: </label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in words:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <label style="font-size: 12px">Note: Bank Service Charges Free of Cost</label>
                    </td>

                </tr>
            </table>
            <br />
            <ul style="display: inline-block;text-align: left;font-size: 11px">


                <li> The Bank Must Return STTS Copy to the Candidate</li>
                <li> Attach CNIC Copy with deposit slip</li>
                <li> Application Form will not be entertained without Original Deposit</li>
                <li> Application Form will not be entertained other than against cash payment.</li>
                <li> FBP Endorsement is required on All the Deposit Slips. </li>
                <li> Deposit it in any online country wide branches</li>
              <div style=" text-align: justify;
  text-justify: inter-word;">  <li>Cash should always be deposited at the respective counter and
                    electronic computer generated receipt printed through flatbed
                    printer on deposit slip/challan should be obtained before leaving
                    the counter, please be sure to check the receipt and satisfy that
                    complete details including account number and amount
                    deposited are correctly printed failing which the bank will not
                    be responsible </li> </div>
            </ul>
            <table style="padding-top: 30px">

                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">Applicant Name:</label>
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    </td>
                </tr>
                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px"> Applicant Father Name</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">CNIC No./Form B.No:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">Applied for:</label>
                    </td>
                    <td>

                    </td>
                </tr>


            </table>
            <div style="padding-top: 100px">
                _____________ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ______________ <br />
                <label style="font-size: 12px">Applicant Signature</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <label style="font-size: 12px">Cashier</label>
            </div>
        </div>
    </div>
    <div class="rightpane">
        <div>

            <div style="display: block; text-align: center">
                <label for=""> Strategic Testing Services <br /> STS copy </label>
            </div>

            <div style="padding-top: 30px">
                <label style="font-size: 12px"> Branch Code: __________________</label>
                <label style="font-size: 12px;padding-left:30px"> Date: ______ /______ /_________ </label> <br><br>
                <label style="font-size: 12px"> Branch Name: _______________________</label>
                 <label style="display:block;text-align:center;padding-top:10px">Pcode:<?php echo $cid ?></label>
            </div>

            <div style="display: block; text-align: center;padding-top: 30px">
                <label style="font-size: 15px"> Online Deposit Copy</label> <br />
                <label style="font-size: 12px">Please deposit in only one bank & tick the relevant Bank</label>
            </div>
            <table>
                <tr>
                    <td style="width:200px;">
                        HBL
                        <img src="images/hbl.jpg" alt="Italian Trulli" style="width: 100px;height: 30px">
                    </td>
                    <td style="width: 300px;padding-left: 10px;padding-top: 10px;">
                        <label style="width:100px;height: 100px;border: 1px solid blue; padding-left: 5px">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label> Habib Bank Limited </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Remote Branch:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Title:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Number:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in Figures: </label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in words:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <label style="font-size: 12px">Note: Bank Service Charges Free of Cost</label>
                    </td>

                </tr>
            </table>
            <br />
            <table>
                <tr>
                    <td style="width:200px;">
                        ABL
                        <img src="images/abl.jpg" alt="Italian Trulli" style="width: 100px;height: 30px">
                    </td>
                    <td style="width: 300px;padding-left: 10px;padding-top: 10px;">
                        <label style="width:100px;height: 100px;border: 1px solid blue; padding-left: 5px">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label> Allied Bank Limited </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Remote Branch:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Title:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Account Number:</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in Figures: </label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 12px"> Amount in words:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <label style="font-size: 12px">Note: Bank Service Charges Free of Cost</label>
                    </td>

                </tr>
            </table>
            <br />
            <ul style="display: inline-block;text-align: left;font-size: 11px">


                <li> The Bank Must Return STTS Copy to the Candidate</li>
                <li> Attach CNIC Copy with deposit slip</li>
                <li> Application Form will not be entertained without Original Deposit</li>
                <li> Application Form will not be entertained other than against cash payment.</li>
                <li> FBP Endorsement is required on All the Deposit Slips. </li>
                <li> Deposit it in any online country wide branches</li>
            <div style=" text-align: justify;
  text-justify: inter-word;">  <li>Cash should always be deposited at the respective counter and
                    electronic computer generated receipt printed through flatbed
                    printer on deposit slip/challan should be obtained before leaving
                    the counter, please be sure to check the receipt and satisfy that
                    complete details including account number and amount
                    deposited are correctly printed failing which the bank will not
                    be responsible </li> </div>
            </ul>
            <table style="padding-top: 30px">

                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">Applicant Name:</label>
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    </td>
                </tr>
                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px"> Applicant Father Name</label>
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">CNIC No./Form B.No:</label>
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td style="padding-top:5px;padding-bottom: 5px">
                        <label style="font-size: 12px">Applied for:</label>
                    </td>
                    <td>

                    </td>
                </tr>


            </table>
            <div style="padding-top: 100px">
                _____________ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ______________ <br />
                <label style="font-size: 12px">Applicant Signature</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <label style="font-size: 12px">Cashier</label>
            </div>
        </div>
    </div>



    <!-- Till 180 line number it contain personal infromation form data pick the id's and with the help of these id's store into database table name as personalinfo -->



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
        alert("Please use the Print PDF button at the right top corner for a better rendering on the document");
        e.cancelBubble = true;
        e.preventDefault();

        e.stopImmediatePropagation();
    }  
})
</script>

