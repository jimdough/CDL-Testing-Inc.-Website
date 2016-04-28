<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en" >
	<!--<![endif]-->

	<head>
		<title>Indianapolis,Indiana CDL Testing | CDL Testing Inc.</title>
		<?php include("inc/head.inc"); ?>
	</head>
	<body>
		<?php include("inc/analytics.inc"); ?>
		<!-- Start: Wrapper -->
		<div class="wrapper">
			<!-- Start: Header -->
			<header id="header">
				<div class="row">
					<?php include("inc/nav.inc"); ?>
				</div>
			</header>
			<!-- End: Header -->

			<div class="page-title">
				<div class="row">
					<div class="small-12 large-6 column">
						<h1  class="animated flipInX">Indianapolis,IN</h1>
					</div>
					<div class="small-12 large-6 column">
						<ul class="breadcrumbs right">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li class="current">
								<a href="#">Indianapolis,IN</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<section class="small-12 large-8 column">
					<!-- starts: Google Maps --> 
					<div class="gmapfixed_block">
						<div id="googlemaps-container-top"></div>
						<div id="googlemaps" class="google-map google-map-full"></div>
						<div id="googlemaps-container-bottom"></div>
					</div> 
					<!-- end: Google Maps -->
				</section>
				<aside class="small-12 large-4 column">
					<div class="widget">
						<h4>Office Address</h4>
					 	<address> 
							<ul class="list-unstyled">
				                <li> <i class="icon-home"></i>CDL Testing, Inc.<br>4351 S Harding St. <br>Indianapolis, IN 46217</li>
				                <li> <i class="icon-envelope-alt"></i><a href="mailto:youremail@example.com">youremail@example.com </a></li>
				                <li> <i class="icon-phone-sign"></i>1 (888) 859-1942 </li> 
				            </ul>
						</address>
					</div>
					<div class="widget">
						<h4>Contact us</h4>
					  
							<script type="text/javascript" src="http://form.jotformpro.com/jsform/52294062902957"></script>
					</div>
					
				</aside>
			</div>
			 
			<?php include("inc/footer.inc"); ?>
			
		</div>
		<!-- End: Wrapper -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery.js"><\/script>')
		</script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/vendor/jquery.gmap.min.js"></script>
		<script type="text/javascript">
			/* for Google map */

			$(window).load(function() {
				LoadGmaps();
			});

			/* Add Your Company Name latitude and  longitude here.
			 * for latitude and longitude please check http://itouchmap.com/latlong.html
			 *  */
			var latitude = "39.702461";
			var longitude = "-86.186786";
			var details = "CDL Testing, Inc. - Indianapolis,IN, United States";

			function LoadGmaps() {
				var myLatlng = new google.maps.LatLng(latitude, longitude);
				var myOptions = {
					zoom : 12,
					scrollwheel : true,
					center : myLatlng,
					navigationControl : true,
					mapTypeId : google.maps.MapTypeId.ROADMAP
				}

				var map = new google.maps.Map(document.getElementById("googlemaps"), myOptions);
				var marker = new google.maps.Marker({
					position : myLatlng,
					map : map,
					icon : 'img/map_icon.png'
				});
				var infowindow = new google.maps.InfoWindow({
					content : details
				});
				google.maps.event.addListener(marker, "click", function() {
					infowindow.open(map, marker);

				});

			}

		</script>
		<script src="js/foundation.min.js"></script>
		<script src="js/vendor/jquery.prettyPhoto.js"></script>
		<script src="js/custom.js"></script> 
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
