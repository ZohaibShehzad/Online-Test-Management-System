<?php
	include "views/header.php";
?>

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row gtco-heading">
					<div class="col-md-7 text-left">
						<h2>Contact Us</h2>
						<p></p>
					</div>
				<!--	<div class="col-md-3 col-md-push-2 text-center">
						<p class="mt-md"><a href="#" class="btn btn-special btn-block">Contact us</a></p>
					</div>-->
				</div>
			<!--	<div class="row">
					<div class="col-md-6">
						<form action="#">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="name">Email</label>
								<input type="text" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="message"></label>
								<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn btn-special" value="Send Message">
							</div>
						</form>
					</div>-->
					<div class="col-md-5 col-md-push-1">
						<div class="gtco-contact-info">
							<h3>Our Address</h3>
							<p> </p>
							<ul >
								<li class="address">Office LG-4, P-1263 Tariq Arcade, Block F NPF O-9, PWD Main Road, Islamabad.</li>
								<li class="phone"><a href="tel://+92518460445">+92 51 8460445</a></li>
								<li class="email"><a href="#">contact@strategictestingservice.com</a></li>
								<li class="url"><a href="#">www.strategictestingservice.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END Contact -->

		<div id="map">
    <!--The div element for the map -->
        <script>
// Initialize and add the map
    function initMap() {
  // The location of Uluru
  var uluru = {lat: 33.5650719, lng: 73.1273298};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYwIOAH725-PK3OijJOQTILrus0i4UlVA&callback=initMap">
    </script>
    
		</div>

		

		<!--<div class="gtco-section gto-features">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-zip icon"></i>
							<div class="copy">
								<h3>Architect</h3>
								<p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
								<p><a href="#" class="gtco-more">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-hummer icon"></i>
							<div class="copy">
								<h3>Planning</h3>
								<p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
								<p><a href="#" class="gtco-more">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<i class="ti-plug icon"></i>
							<div class="copy">
								<h3>Parks &amp; Events</h3>
								<p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
								<p><a href="#" class="gtco-more">Learn more</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->

		<?php
	include "views/footer.php";
?>
