<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

	<div id="myNav" class="overlaynav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <div class="overlaynav-content">
	  	<a href="<?php echo base_url('planb_controller/products'); ?>">Products Home Page</a>
	    <a href="<?php echo base_url('planb_controller/bosskit'); ?>">Package Boss Kit</a>
	    <a href="<?php echo base_url('planb_controller/indikit'); ?>">Individual Kit</a>
	    <a href="<?php echo base_url('planb_controller/mobile'); ?>">Mobile App Kit</a>
	    <a href="<?php echo base_url('planb_controller/ecom'); ?>">E-Commerce</a>
	    <a href="<?php echo base_url('planb_controller/custom'); ?>">Customization</a>
	    <a href="<?php echo base_url('planb_controller/webhost'); ?>">Web Hosting</a>
	    <a href="<?php echo base_url('planb_controller/hardware'); ?>">Hardware</a>
	    <a href="<?php echo base_url('planb_controller/other'); ?>">Other Products</a>
	    <a href="<?php echo base_url('planb_controller/all'); ?>">All Products</a>
	  </div>
	</div>

	<div class="bossk">
		<div class="ontop">
			<div class="logorep">
				<img src="<?php echo base_url ('assets/img/planB.svg'); ?>"> 
				<p> PLAN B IT SOLUTION INC.</p>

				<span style="font-weight:bold; font-size:40px;cursor:pointer; color:#dd802c; padding-right:50px; float:right;" onclick="openNav()">&#9776; </span>
			</div>

			<div class="midtext2">
				INFRASTRUCTURES
				<a href="#items">
					<div class="view">
						<div class="etext">
							VIEW PRODUCTS
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="container-fluid items" id="items">
		<div class="col-md-3">
			<div class="boxmodal">
				<div class="round">
					<img src="<?php echo base_url('assets/img/product icons/cabling.png');?>">
				</div>
				<p> CABLING </p>
			</div>
		</div>

		<div class="col-md-3">
			<div class="boxmodal">
				<div class="round">
					<img src="<?php echo base_url('assets/img/product icons/voip.png');?>">
				</div>
				<p> TELEPHONY/VOIP</p>
			</div>
		</div>

	</div>


	<script type="text/javascript">
		function openNav() {
		    document.getElementById("myNav").style.height = "100%";
		}

		function closeNav() {
		    document.getElementById("myNav").style.height = "0%";
		}
	</script>
</body>
</html>