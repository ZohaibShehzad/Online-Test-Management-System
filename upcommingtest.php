<?php
include "views/header.php";
?>

<link href="tables/css/tablestyle.css" rel="stylesheet">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<div class="gtco-section">
	<div class="gtco-container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
				<blockquote>
					<h2>Comitted To Deliver Excellence</h2>
				</blockquote>
				<p>Bringing Innovation, Accuracy & Transparency In Testing.</p>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-25">
				<div class="tab" role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">New Projects</a></li>
						<li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Previous Projects</a></li>
						<li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Tenders</a></li>
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
										<th>Last Date of Submission</th>
										<th>Project Details</th>

									</tr>
								</thead>
								<!--Table head-->

								<!--Table body-->
								<tbody>
									<tr class="table-info">
										<th scope="row">1</th>
										<td>Online Test</td>
										<td>22-52-2020</td>
										<td><a href="signuplogin.php">Click Here</a></td>


								</tbody>
								<!--Table body-->
							</table>
							<!--Table-->
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Section2">
							<table class="table table-striped w-auto">
								<!--Table head-->
								<thead>
									<tr>
										<th>Sr#</th>
										<th>Project Title</th>
										<th>Last Date of Submission</th>
										<th>Project Details</th>

									</tr>
								</thead>
								<!--Table head-->

								<!--Table body-->
								<tbody>
									<tr class="table-info">
										<th scope="row">1</th>
										<td>dfsdfsdfsdfsdjkfnsdjf</td>
										<td>22-52-2020</td>
										<td><a href="#A">Click Here</a></td>


								</tbody>
								<!--Table body-->
							</table>
							<!--Table-->
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Section3">
							<table class="table table-striped w-auto">
								<!--Table head-->
								<thead>
									<tr>
										<th>Sr#</th>
										<th>Project Title</th>
										<th>Last Date of Submission</th>
										<th>Project Details</th>

									</tr>
								</thead>
								<!--Table head-->

								<!--Table body-->
								<tbody>
									<tr class="table-info">
										<th scope="row">1</th>
										<td>dfsdfsdfsdfsdjkfnsdjf</td>
										<td>22-52-2020</td>
										<td><a href="#A">Click Here</a></td>


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
</div>
<?php
	include "views/footer.php";
?>