<?php 
  $page = "location";
  $title = "Location";
  include 'includes/_header.php'; 
?>


<div id="map"></div>

	
<div class="location-content">
	<h1>Location</h1>
	<div class="button button-location"><a href="#">How to<br />get here</a></div>  
	<div class="hotels">
		<h6>Where to stay</h6>
		<ol>
			<li>
				<a class="number" href="#">1</a>
				<a href="#"><img src="assets/images/star.png" alt="4 stars" /></a>
				<h5><a href="#">GRANGE ST PAULS</a></h5>
				<p>10 Godliman Street<br />
				from £250/night</p>
			</li>
			<li>
				<a class="number" href="#">2</a>
				<a href="#"><img src="assets/images/star.png" alt="4 stars" /></a>
				<h5><a href="#">CROWNE PLAZA CITY</a></h5>
				<p>19 New Bridge Street<br />
				from £130/night</p>
			</li>
			<li class="last">
				<a class="number" href="#">3</a>
				<a href="#"><img src="assets/images/star.png" alt="4 stars" /></a>
				<h5><a href="#">MERCURE BANKSIDE</a></h5>
				<p>71 Southwark Street<br />
				from £105/night</p>
			</li>
		</ol>
	
	</div>
</div>
<?php include 'includes/_footer.php'; ?>

