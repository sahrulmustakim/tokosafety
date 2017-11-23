<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ul>
				<li class="home"> <a title="Go to Home Page" href="<?=site_url()?>">Home</a><span>&mdash;›</span></li>
				<li class="category13"><strong>About Us</strong></li>
			</ul>
		</div>
	</div>
</div>

<style>
#map {
	height: 400px;
	width: 100%;
}
</style>
<!-- main-container -->
<div class="main-container col2-right-layout">
	<div class="main container">
		<div class="row">
			<section class="col-main col-sm-9 wow bounceInUp animated">
				<div class="page-title">
					<h2>About Us</h2>
				</div>
				<div class="static-contain">
					<p><img src="<?php echo base_url()?>assets/images/logo68.png" alt="logo" style="width:265px;"></p>
					<p><?=$contact_info?></p><br>
					<p>
						<div id="map"></div>
						<script>
						function initMap() {
							var uluru = {lat: -6.1463327, lng: 106.8168181};
							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 17,
								center: uluru
							});
							var marker = new google.maps.Marker({
								position: uluru,
								map: map
							});
						}
						</script>
						<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwn2qP_4mXippp5aaLGP4o-rpH-lhc_00&callback=initMap"></script>
					</p><br>
					<p style="font-weight:bold;">Address :</p>
					<p><?=$contact_address?></p><br>
					<p style="font-weight:bold;">Phone :</p>
					<p><a href="tel:<?=$contact_phone?>"><?=$contact_phone?></a></p><br>
					<p style="font-weight:bold;">Fax :</p>
					<p><?=$contact_fax?></p><br>
					<p style="font-weight:bold;">Email :</p>
					<p><a href="mailto:<?=$contact_email?>"><?=$contact_email?></a></p><br>
				</div>
			</section>
			<aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
				<div class="block block-company">
					<div class="block-title">Company </div>
					<div class="block-content">
					<ol id="recently-viewed-items">
						<li class="item odd"><strong>About Us</strong></li>
						<li class="item last"><a href="<?=site_url('contactus')?>">Contact Us</a></li>
					</ol>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>
<!--End main-container --> 