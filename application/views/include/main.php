<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $title; ?> </title>
</head>

<body>
	<nav>
		<div class="wrapper">
			<div class="logo"> PLAN B </div>
			<div class="menu">
				<ul>
					<li><a href="#">HOME </a></li>
					<li><a href="#about">ABOUT US </a></li>
					<li><a href="#services">SERVICES </a></li>
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

	<div class="container-fluid about" id="about">
		<div class="col-md-6 col-lg-4 col-sm-12">
			<!-- <div class="box"> -->
				<div class="box2" style="font-family: Montserrat; font-weight: bold; font-size: 26px;">
					HISTORY <br>
					<img src="<?php echo base_url('assets/img/linedeco.png');?>">
					<p style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			<!-- </div> -->
		</div>

		<div class="col-md-6 col-lg-4 col-sm-12">
			<!-- <div class="box"> -->
				<div class="box2" style="font-family: Montserrat; font-weight: bold; font-size: 26px;">
					OUR MISSION <br>
					<img src="<?php echo base_url('assets/img/linedeco.png');?>">
					<p style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			<!-- </div> -->
		</div>

		<div class="col-md-6 col-lg-4 col-sm-12">
			<!-- <div class="box">
 -->			<div class="box2" style="font-family: Montserrat; font-weight: bold; font-size: 26px;">
					OUR STRATEGY <br>
					<img src="<?php echo base_url('assets/img/linedeco.png');?>">
					<p style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			<!-- </div> -->
		</div>
	</div>

	<div class="services" id="services">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
			<!-- <ol class="carousel-indicators">
				<li data-target="myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="myCarousel" data-slide-to="1"></li>
				<li data-target="myCarousel" data-slide-to="2"></li>
			</ol> -->

			<div class="carousel-inner">

				<div class="item active">
				  <div style="text-align: center; font-size: 29px;">
				    	<p style="font-weight: bolder;">WHAT WE OFFER</p>
				    	<p style="font-style: italic; font-size: 20px; color: #fff;">
				    	we offer our customers the best services & solutions, this is our main services list
				    	</p>
				  </div>
				</div>

				<div class="item">
				  	<div style="text-align: center; font-size: 28px;">
				    	<p style="font-weight: bolder;">MULTI PLATFORMS FOR SOFTWARE DEVELOPMENT</p>
				    	<p style="font-style: italic; font-size: 20px; color: #fff;">
				    	.NET, C++, C#, PHP, JAVA, etc..
				    	</p>
				  </div>
				</div>
				    
				<div class="item">
				   	<div style="font-size: 28px;">
				    	<p style="font-weight: bolder; text-align: center;">WE OFFER & DEVELOP</p>
				    	<p style="font-style: italic; font-size: 20px; color: #fff; text-align: center;">
				    		Just tell us what you need and chances are we already have the technology fit for it.
				    	</p>
				    	<ul style="font-size: 22px; color: #fff;text-align: justify; padding-left: 15%; padding-right:15%;"> <br>
				    		<li> 
				    			IT programs, including Accounting, CRM, Data mining system, POS, Human resource Management, Medical and other small and medium business software, to provide our customer with expert service.
				    		</li><br>
				    		<li>
				    			Facilities and Network Services include from Planning, Structured Cabling, Electrical System, Electronic Security System (Door access and CCTV products) and Telephony Systems.
				    		</li><br>
				    		<li>
				    			Workstation and server maintenance, full helpdesk, network support remote and in-house as well. As required or at a fixed cost as part of our Managed Services.
				    		</li><br>
				    		<li>
				    			Ongoing IT support and advice to assist in the success and productivity of your business.
				    		</li><br>
				    		<li>
				    			Mobile apps for IOS, Android and Windows.
				    		</li>
				    	</ul>
				  </div>
				</div>

				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>		
	</div>
	
	<div class="test2"></div>

	

				
</body>
</html>