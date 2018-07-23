<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $title; ?> </title>
</head>
<body>
	<div class="bg">
		<div class="ontop">
			<div class="logorep">
				<img src="<?php echo base_url ('assets/img/planB.svg'); ?>"> 
				<p> PLAN B IT SOLUTION INC.</p>
			</div>

			<div class="midtext">
				PRODUCTS
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#video">
					<div class="explore">
						<div class="etext">
							EXPLORE
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<!-- <section id="particles-js"> -->
		<div class="video" id="video">
			Want to know more about our products?
			<p>Check this video out</p>
			<hr></hr>
			<!-- <iframe width="80%" height="360" src="https://www.youtube.com/embed/tgbNymZ7vqY">
			</iframe> -->
			<iframe width="80%" height="360" src="https://www.youtube.com/embed/uu6jSpgN4BA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<hr></hr>
		</div>
	<!-- </section> -->

		
		<div class="col-md-6 boss">
			<div class="top">
				<p> PACKAGE BOSS KIT</p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/bosskit'); ?>">
					<img src="<?php echo base_url('assets/img/p1.png');?>"><br>
					PACKAGE BOSS KIT
				</a>
			</div>
		</div>

		<div class="col-md-6 individual">
			<div class="top">
				<p> INDIVIDUAL KIT</p>
			</div>
			<div class="redirect">
				<a href="<?php echo site_url('planb_controller/indikit'); ?>">
					<img src="<?php echo base_url('assets/img/p2.png');?>"><br>
					INDIVIDUAL KIT
				</a>
			</div>
		</div>

		<div class="col-md-6 mobile">
			<div class="top">
				<p> MOBILE APP KIT</p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/mobile'); ?>">
					<img src="<?php echo base_url('assets/img/p3.png');?>"><br>
					MOBILE APP KIT
				</a>
			</div>
		</div>

		<div class="col-md-6 e-comm">
			<div class="top">
				<p> E-COMMERCE</p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/ecom'); ?>">
					<img src="<?php echo base_url('assets/img/p4.png');?>"><br>
					E-COMMERCE
				</a>
			</div>
		</div>

		<div class="col-md-6 custom">
			<div class="top">
				<p> CUSTOMIZATION </p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/custom'); ?>">
					<img src="<?php echo base_url('assets/img/p5.png');?>"><br>
					CUSTOMIZATION
				</a>
			</div>
		</div>

		<div class="col-md-6 webhost">
			<div class="top">
				<p> WEB HOSTING </p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/webhost'); ?>">
					<img src="<?php echo base_url('assets/img/p6.png');?>"><br>
					WEBHOSTING
				</a>
			</div>
		</div>

		<div class="col-md-6 hardware">
			<div class="top">
				<p> HARDWARE </p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/hardware'); ?>">
					<img src="<?php echo base_url('assets/img/p7.png');?>"><br>
					HARDWARE
				</a>
			</div>
		</div>

		<div class="col-md-6 infra">
			<div class="top">
				<p> INFRASTRUCTURE </p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/infra'); ?>">
					<img src="<?php echo base_url('assets/img/p8.png');?>"><br>
					INFRASTRUCTURE
				</a>
			</div>
		</div>

		<div class="col-md-6 manymore">
			<div class="top">
				<p> AND MANY MORE </p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/other'); ?>">
					<img src="<?php echo base_url('assets/img/p9.png');?>"><br>
					AND MANY MORE
				</a>
			</div>
		</div>

		<div class="col-md-6 all">
			<div class="top">
				<p> ALL PRODUCTS </p>
			</div>
			<div class="redirect">
				<a href="<?php echo base_url('planb_controller/all'); ?>">
					<img src="<?php echo base_url('assets/img/p1.png');?>"><br>
					ALL PRODUCTS
				</a>
			</div>
		</div>

		


	<script src="<?php echo base_url ('assets/js/particles.js'); ?>"></script>
	<script src="<?php echo base_url ('assets/js/app.js'); ?>"></script>

</body>
</html>