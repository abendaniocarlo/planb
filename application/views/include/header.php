<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $title; ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/fonts.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.theme.css'); ?>">
</head>

<body>
	<nav>
		<div class="wrapper">
		<div class="logo"> LOGO </div>
		<div class="menu">
			<ul>
				<li><a href="#">HOME </a></li>
				<li><a href="#">ABOUT US </a></li>
				<li><a href="#">SERVICES </a></li>
				<li><a href="#">PRODUCTS </a></li>
				<li><a href="#">CLIENT</a></li>
				<li><a href="#">PARTNERSHIP </a></li>
				<li><a href="#">CONTACT </a></li>
			</ul>
		</div>
		</div>
	</nav>

	<header>
	  <div class="content">
	   	<hgroup class="intro scale">
	      	<h1>PLAN B</h1>
	      	<i>IT Soulutions</i>
	   	</hgroup>
	  </div>

	  <div class="overlay"></div>
	</header>

	<!-- ABOUT US -->
	<!-- <div class="container-fluid about">
		<div class="col-md-4 col-lg-4 col-sm-4"></div>
		<div class="col-md-4 col-lg-4 col-sm-4">
			<div class="mission">
				OUR MISSION &nbsp;
				<hr> 
				<div class="mcontent">
				To provide reliable, long-term IT solutions? NAH! Everybody wants to do that… &nbsp;
				We just want our clients to be satisfied the way they want technology to work with them.
				</div>
			</div>
		</div>
		<div class="col-md-4 col-lg-4 col-sm-4"></div>
	</div> -->

	<div class="container-fluid us">
		<div class="col-md-6 col-lg-4 col-sm-12">
			<div class="box">
				<div class="box2">
					HISTORY 
					<p style="margin-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 col-sm-12">
			<div class="box">
				<div class="box2">
					OUR MISSION
					<p style="margin-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 col-sm-12">
			<div class="box">
				<div class="box2">
					OUR STRATEGY
					<p style="margin-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="services"></div>
	<div class="test"></div>

	<!-- SCRIPTS -->
	<script src="<?php echo base_url ('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript">
		// NAVBAR
		$(window).on("scroll", function() {
		      if ($(window).scrollTop()) {
		        $('nav').addClass('black');
		      } 

		      else {
		        $('nav').removeClass('black');
		      }

		    });
	</script>
</body>
</html>