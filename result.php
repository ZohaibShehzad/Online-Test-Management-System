<?php
	include "views/header.php";
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
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Result</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
					<table class="table table-striped w-auto">

<!--Table head-->
<thead>
  <tr>
	<th>Sr#</th>
	<th>Project Title</th>
	<th>Test Date</th>
	<th>Action</th>
	
  </tr>
</thead>
<!--Table head-->

<!--Table body-->
<tbody>
  <tr class="table-info">
	<th scope="row">1</th>
	<td style="width: 650px">	
Punjab Pharmacy Council Punjab (Pharmacy Council Conduction of 
20th & 18th Pharmacy Technicians Examinations (Supplementary) 2019)</td>
	<td>22-5-2020</td>
	<td><a href="resultcheck.php">Click Here to check Result</a></td>
	
  
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
