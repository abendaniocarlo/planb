<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $title; ?> </title>
</head>

<body>
	<nav>
		<div class="wrapper">
			<div class="menu-icon">
				<i class="lnr lnr-menu-circle"></i>
			</div>
			<div class="logo"> PLAN B </div>
			<div class="menu" id="menu">
				<ul>
					<li><a href="#home" class="lnk">HOME </a></li>
					<li><a href="#about" class="lnk">ABOUT US </a></li>
					<li><a href="#services" class="lnk">SERVICES </a></li>
					<li><a href="#products" class="lnk">PRODUCTS </a></li>
					<li><a href="#clients" class="lnk">CLIENT</a></li>
					<li><a href="#partners" class="lnk">PARTNERSHIP </a></li>
					<li><a href="#contact_us" class="lnk">CONTACT </a></li>
				</ul>
			</div>
		</div>
	</nav>

	<header id="home">
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
					<p style="margin-top: 23px; font-family: Raleway;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
			<!-- <ol class="carousel-indicators">
				<li data-target="myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="myCarousel" data-slide-to="1"></li>
				<li data-target="myCarousel" data-slide-to="2"></li>
			</ol> -->

			<div class="carousel-inner">

				<div class="item active">
				  <div style="text-align: center; font-size: 29px;">
				    	<p style="font-weight: bolder; font-family: Montserrat;">WHAT WE OFFER</p><br>
				    	<!-- <p style="font-style: italic; font-size: 20px; color: #fff;">
				    	we offer our customers the best services & solutions, this is our main services list
				    	</p> -->
				    	<h2></h2>
				    	<div class="col-lg-12" style="margin-left: 13%;">
					    	<div class="col-lg-3 offers">
					    		<img src="<?php echo base_url('assets/img/o1.png');?>"><br>
					    		<h4>HARDWARE</h4>
					    	</div>
					    	<div class="col-lg-3 offers">
					    		<img src="<?php echo base_url('assets/img/o2.png');?>"><br>
					    		<h4>SOFTWARE</h4>
					    	</div>
					    	<div class="col-lg-3 offers">
					    		<img src="<?php echo base_url('assets/img/o3.png');?>"><br>
					    		<h4>SYSTEM DEVELOPMENT</h4>
					    	</div>
					    	<div class="col-lg-3 offers" style="border-right: 0px;">
					    		<img src="<?php echo base_url('assets/img/o4.png');?>"><br>
					    		<h4>MOBILE APPLICATION</h4>
					    	</div>
					    </div>
					    <div class="col-lg-12" style="margin-left: 13%;">
					    	<div class="col-lg-3 offers">
					    		<img src="<?php echo base_url('assets/img/o5.png');?>"><br>
					    		<h4>WEB APPLICATION</h4>
					    	</div>
					    	<div class="col-lg-3 offers">
					    		<img src="<?php echo base_url('assets/img/o6.png');?>"><br>
					    		<h4>STRUCTURE CABLING</h4>
					    	</div>
					    	<div class="col-lg-3 offers">
					    		<img src="<?php echo base_url('assets/img/o7.png');?>"><br>
					    		<h4>IP TELEPHONY</h4>
					    	</div>
					    	<div class="col-lg-3 offers" style="border-right: 0px;">
					    		<img src="<?php echo base_url('assets/img/o8.png');?>"><br>
					    		<h4>SERVICE MAINTENANCE</h4>
					    	</div>
					    </div>
					    <div class="col-lg-12" style="margin-left: 13%;">
					    	<div class="col-lg-3 offers" style="border-bottom: 0px;">
					    		<img src="<?php echo base_url('assets/img/o9.png');?>"><br>
					    		<h4>WEBSITE</h4>
					    	</div>
					    	<div class="col-lg-3 offers" style="border-bottom: 0px;">
					    		<img src="<?php echo base_url('assets/img/o10.png');?>"><br>
					    		<h4>CLOUD SERVICE</h4>
					    	</div>
					    	<div class="col-lg-3 offers" style="border-bottom: 0px;">
					    		<img src="<?php echo base_url('assets/img/o11.png');?>"><br>
					    		<h4>IT SOLUTIONS</h4>
					    	</div>
					    	<div class="col-lg-3 offers" style="border-right: 0px; border-bottom: 0px;">
					    		<img src="<?php echo base_url('assets/img/o12.png');?>"><br>
					    		<h4>IT HELP DESK</h4>
					    	</div>
					    </div>
				  </div>
				</div>

				<div class="item">
				  	<div style="text-align: center; font-size: 28px; font-family: Montserrat;">
				    	<p style="font-weight: bolder;">MULTI PLATFORMS FOR SOFTWARE DEVELOPMENT</p>
				    	<!-- <p style="font-style: italic; font-size: 20px; color: #fff;">
				    	.NET, C++, C#, PHP, JAVA, etc..
				    	</p> -->
				    	<h2></h2>
				    	<div class="col-lg-12 platforms">
				    		<img src="<?php echo base_url('assets/img/s1_2.png');?>" 
				    		onmouseover="this.src='assets/img/s1new.png'" onmouseout="this.src='assets/img/s1_2.png'">
				    		<img src="<?php echo base_url('assets/img/s2_2.png');?>"
				    		onmouseover="this.src='assets/img/s2new.png'" onmouseout="this.src='assets/img/s2_2.png'">
				    		<img src="<?php echo base_url('assets/img/s3_2.png');?>"
				    		onmouseover="this.src='assets/img/s3new.png'" onmouseout="this.src='assets/img/s3_2.png'"> <br>
				    		<img src="<?php echo base_url('assets/img/s4_2.png');?>"
				    		onmouseover="this.src='assets/img/s4new.png'" onmouseout="this.src='assets/img/s4_2.png'">
				    		<img src="<?php echo base_url('assets/img/s5_2.png');?>"
				    		onmouseover="this.src='assets/img/s5new.png'" onmouseout="this.src='assets/img/s5_2.png'">
				    		<img src="<?php echo base_url('assets/img/s6_2.png');?>"
				    		onmouseover="this.src='assets/img/s6new.png'" onmouseout="this.src='assets/img/s6_2.png'">
				    	</div>
				  </div>
				</div>
				    
				<div class="item">
				   	<div style="font-size: 28px;">
				    	<p style="font-weight: bolder; text-align: center; font-family: Montserrat;">WE OFFER & DEVELOP</p>
				    	<!-- <p style="font-style: italic; font-size: 20px; color: #fff; text-align: center;">
				    		Just tell us what you need and chances are we already have the technology fit for it.
				    	</p> -->
				    	<h2></h2>
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
	
	<div class="products" id="products">
		<p class="headline" style="color:#000;">PRODUCTS </p><br>
		<h2></h2>
	
		<!-- <img src="<?php echo base_url('assets/img/line.png');?>"> -->

		<div class="container-fluid">
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p1.png');?>">
						<p style="font-family:Montserrat;">PACKAGE BOSS KIT </p>
						<ul style="text-align: left; margin-left: 20px;">
							<li><span class="lnr lnr-checkmark-circle"></span> Hris Integrated Payroll System Boss Kit</li>
							<li><span class="lnr lnr-checkmark-circle"></span> CRM System Boss Kit</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Hotel + Inventory Boss Kit</li>
						</ul>
						<div class="middle">
							<a href="http://www.kabslash.solutions/" target="_blank"> LEARN MORE</a>
						</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p2.png');?>">
						<p style="font-family: Montserrat;">INDIVIDUAL KIT </p>
						<ul style="text-align: left; margin-left: 40px;">
							<li><span class="lnr lnr-checkmark-circle"></span> Ware House Management Kit </li>
							<li><span class="lnr lnr-checkmark-circle"></span> Invoice/Billing Kit</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Clinic Information Kit</li>
						</ul>
						<div class="middle">
							<a href=""> LEARN MORE</a>
						</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p3.png');?>">
						<p style="font-family: Montserrat;">MOBILE APP KIT </p>
						<ul style="text-align: left; margin-left: 40px;">
							<li><span class="lnr lnr-checkmark-circle"></span> Customized Mobile App Kit</li>
							<li><span class="lnr lnr-checkmark-circle"></span> iOS </li>
							<li><span class="lnr lnr-checkmark-circle"></span> Android </li>
						</ul>
						<div class="middle">
							<a href=""> LEARN MORE</a>
						</div>
				</div>
			</div>
		</div><br><br>

		<div class="container-fluid">
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p4.png');?>">
						<p style="font-family: Montserrat;"> E-COMMERCE </p>
						<ul style="text-align: left; margin-left: 40px;">
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
						</ul>
						<div class="middle">
							<a href=""> LEARN MORE</a>
						</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p5.png');?>">
						<p style="font-family: Montserrat;">CUSTOMIZATION </p>
						<ul style="text-align: left; margin-left: 40px;">
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
						</ul>
						<div class="middle">
							<a href=""> LEARN MORE</a>
						</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p6.png');?>">
						<p style="font-family: Montserrat;">WEB HOSTING </p>
						<ul style="text-align: left; margin-left: 40px;">
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
						</ul>
						<div class="middle">
							<a href=""> LEARN MORE</a>
						</div>
				</div>
			</div>
		</div><br><br>


		<div class="container-fluid">
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p7.png');?>">
						<p style="font-family: Montserrat;">HARDWARE </p>
						<ul style="text-align: left; margin-left: 40px;">
							<li><span class="lnr lnr-checkmark-circle"></span> Servers</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Switches/Router</li>
							<li><span class="lnr lnr-checkmark-circle"></span> CCTV</li>
						</ul>
						<div class="middle">
							<a href=""> LEARN MORE</a>
						</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p8.png');?>">
						<p style="font-family: Montserrat;">INFRASTRUCTURE </p>
						<ul style="text-align: left; margin-left: 40px;">
							<li><span class="lnr lnr-checkmark-circle"></span> Cabling</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Telephony/VOIP</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Loren ipsum dolor sit amet</li>
						</ul>
						<div class="middle">
							<a href=""> LEARN MORE</a>
						</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pbox">
					<img src="<?php echo base_url('assets/img/p9.png');?>">
						<p style="font-family: Montserrat;">AND MANY MORE! </p>
						<ul style="text-align: left; margin-left: 40px; ">
							<li><span class="lnr lnr-checkmark-circle"></span> IT Solution</li>
							<li><span class="lnr lnr-checkmark-circle"></span> Floor Layout</li>
							<li><span class="lnr lnr-checkmark-circle"></span> F1 Technical Support/Help Desk</li>
						</ul>
						<div class="middle">
							<a href=""> See All Products</a>
						</div>
				</div>
			</div>
		</div>
	</div>

	<div class="expertise">
		<div class="blackoverlay">
			<div class="title">
				OTHER AREAS OF
				<p style="font-size: 41px; color: #fff;">EXPERTISE</p>
			</div>
			<div class="banner">
				<div class="col-md-3" style="margin-top: 60px; margin-left: 20px;">
					<h4> CLOUD SERVICES</h4>
					<div style="font-size: 15px; margin-left: 10px;" >
						<p ><span class="lnr lnr-cloud"></span> Server and Infrastructure</p>
						<p ><span class="lnr lnr-cloud"></span> Backup Solutions</p>
						<p ><span class="lnr lnr-cloud"></span> Hosted Applications</p>
					</div><br><br>
					
					<h4> NETWORK</h4>
					<div style="font-size: 15px; margin-left: 10px;" >
						<p ><span class="lnr lnr-earth"></span> Network Design and Configuration</p>
						<p ><span class="lnr lnr-earth"></span> Drafting and Documentation</p>
						<p ><span class="lnr lnr-earth"></span> VPN Tunneling</p>
						<p ><span class="lnr lnr-earth"></span> Remote access and Satellite User Solutions</p>
					</div>
				</div>

				<div class="col-md-4" style="margin-top: 60px; margin-left: 10px;">
					<h4> TELECOMMUNICATIONS</h4>
					<div style="font-size: 15px; margin-left: 10px;" >
						<p ><span class="lnr lnr-phone-handset"></span> IP and Digital Telephony Systems</p>
						<p ><span class="lnr lnr-phone-handset"></span> Predictive Dialer Solutions</p>
						<p ><span class="lnr lnr-phone-handset"></span> Call center software Integration</p>
					</div><br><br>
					
					<h4> SOLUTIONS DEVELOPMENT</h4>
					<div style="font-size: 15px; margin-left: 10px;" >
						<p ><span class="lnr lnr-cog"></span> Database Design and Administration</p>
						<p ><span class="lnr lnr-cog"></span> Business Processes Automation</p>
						<p ><span class="lnr lnr-cog"></span> Reporting Services</p>
						<p ><span class="lnr lnr-cog"></span> Custom Web Applications</p>
					</div>
				</div>

				<div class="col-md-4" style="margin-top: 60px; margin-left: 10px;">
					<h4> SERVER MANAGEMENT</h4>
					<div style="font-size: 15px; margin-left: 10px;" >
						<p ><span class="lnr lnr-database"></span> Domain Services Management</p>
						<p ><span class="lnr lnr-database"></span> Planning and Deployment</p>
						<p ><span class="lnr lnr-database"></span> Virtualization</p>
						<p ><span class="lnr lnr-database"></span> Maintenance, Monitoring and Repair</p>
						<p ><span class="lnr lnr-database"></span> Onsite and Offsite Backup Strategies</p>
						<p ><span class="lnr lnr-database"></span> Load Balancing and Network Redundancy Implementation</p>
						<p ><span class="lnr lnr-database"></span> Maintenance Schedules</p>
						<p ><span class="lnr lnr-database"></span> IP Security Cameras and D/NVR</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div id="clients" class="clients">
		<p  class="headline" style="color:#000; margin-top:60px;">OUR CLIENTS</p>
		<h2></h2>
		<div id="myClientCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
		    <div class="carousel-inner">
		      <div class="item active" style="background-color:#EAEDED;">
		      	<div class="container">
					<div class="row">
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client1.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client2.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client3.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client4.png'); ?>" alt="" />
					  </div>
					</div>
				</div>
		      </div>
		      <div class="item" style="background-color:#EAEDED;">
		      	<div class="container">
					<div class="row">
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client5.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client6.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client7.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client8.png'); ?>" alt="" />
					  </div>
					</div>
				</div>
		      </div>
		      <div class="item" style="background-color:#EAEDED;">
		      	<div class="container">
					<div class="row">
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client9.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client10.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client11.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client12.png'); ?>" alt="" />
					  </div>
					</div>
				</div>
		      </div>
		      <div class="item" style="background-color:#EAEDED;">
		      	<div class="container">
					<div class="row">
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client13.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client14.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client15.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client16.png'); ?>" alt="" />
					  </div>
					</div>
				</div>
		      </div>
		      <div class="item" style="background-color:#EAEDED;">
		      	<div class="container">
					<div class="row">
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client17.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client18.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client19.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client20.png'); ?>" alt="" />
					  </div>
					</div>
				</div>
		      </div>
		      <div class="item" style="background-color:#EAEDED;">
		      	<div class="container">
					<div class="row">
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client21.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client22.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client23.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client24.png'); ?>" alt="" />
					  </div>
					</div>
				</div>
		      </div>
		      <div class="item" style="background-color:#EAEDED;">
		      	<div class="container">
					<div class="row">
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client25.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client26.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client27.png'); ?>" alt="" />
					  </div>
					  <div class="column">
					    <img src="<?php echo base_url ('assets/img/client28.png'); ?>" alt="" />
					  </div>
					</div>
				</div>
		      </div>
		    </div>
		    <a class="left carousel-control" href="#myClientCarousel" data-slide="prev" style="display:none;">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myClientCarousel" data-slide="next" style="display:none;">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		</div>
	</div>

	<div id="workprocess" class="workprocess">
		<div class="screen">
		<div class="inner_workprocess">
			<p class="headline" style="margin-top:60px; color:#fff;"> WORK PROCESS</p>
<!-- 			<hr style="width: 200px;" />
 -->			
 			<h2></h2>
 			<table>
				<tr> 
				  <div class="row process_box">
					<div class="col-md-3 col-sm-6 process_icon">
					<img src="<?php echo base_url ('assets/img/planning2.png'); ?>" alt="Planning" class="processimg" />
					<h3>Planning</h3>
					</div><div class="col-md-3 col-sm-6 process_icon">
					<img src="<?php echo base_url ('assets/img/design2.png'); ?>" alt="Designing" class="processimg" />
					<h3>Designing</h3>
					</div><div class="col-md-3 col-sm-6 process_icon">
					<img src="<?php echo base_url ('assets/img/development2.png'); ?>" alt="Development" class="processimg" />
					<h3>Development</h3>
					</div><div class="col-md-3 col-sm-6 process_icon">
					<img src="<?php echo base_url ('assets/img/launch2.png'); ?>" alt="Launch" class="processimg" />
					<h3>Launch</h3></div>
				   </div>
				</tr>
			</table>	
		</div>
		</div>
	</div>

	<div id="partners" class="partners">
		<div id="" class="container">
		<p class="headline" style="color:#fff;"> OUR PARTNERS</p>
<!-- 		<hr style="width: 200px;" />
 -->		
 			<h2></h2><br>
 			<div class="row" style="margin-top: 30px;">
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners1.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners2.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners3.png'); ?>" alt="" />
			  </div>
			</div>
			<div class="row">
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners4.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners5.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners6.png'); ?>" alt="" />
			  </div>
			</div>
			<div class="row">
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners7.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners8.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners9.png'); ?>" alt="" />
			  </div>
			</div>
			<div class="row">
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners10.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners11.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners12.png'); ?>" alt="" />
			  </div>
			</div>
			<div class="row">
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners13.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners14.png'); ?>" alt="" />
			  </div>
			  <div class="column">
			    <img src="<?php echo base_url ('assets/img/partners15.png'); ?>" alt="" />
			  </div>
			</div>
		</div>
	</div>
	<div id="contact_us" class="footer">
		<div class="footerscreen">
		<div class="container-fluid">
		<p class="headline" style="color:#fff; margin-top:60px;">CONTACT US</p>
<!-- 		<hr style="width: 200px;" /> -->
		<br>

		<h2></h2>
			<div class="row" style="margin:0px 50px 30px 50px;">
				<div class=" col-lg-4 col-md-4 col-sm-12">
					<div style="width:100%;height:100px;background-color:rgba(255,255,255,0.3);margin-bottom:30px;border-radius:10px ">
						<h1 style="margin:0px;">PLAN B LOGO HERE</h1>
					</div>
					<p class="contactdetails"><span class="glyphicon glyphicon-earphone"></span> (632) 123-1234</p>
					<p class="contactdetails"><span class="glyphicon glyphicon-envelope"></span> email@address.com</p>
					<p class="contactdetails"><span class="glyphicon glyphicon-map-marker"></span> location</p>
					<p></p>
					<table style="margin-top:20px;">
						<tr>
							<th>
								<a href="#" id="fb_link">
									<img src="<?php echo base_url ('assets/img/noncol_fb.png'); ?>" alt="Facebook" style="width:40px;margin-right:5px;" title="Facebook">
								</a>
							</th>
							<th>
								<a href="#" id="in_link">
									<img src="<?php echo base_url ('assets/img/noncol_linkedin.png'); ?>" alt="LinkedIn" style="width:40px;margin-right:5px;" title="LinkedIn">
								</a>
							</th>
							<th>
								<a href="#" id="gp_link">
									<img src="<?php echo base_url ('assets/img/noncol_gplus.png'); ?>" alt="Google+" style="width:40px;margin-right:5px;" title="Google+">
								</a>
							</th>
							<th>
								<a href="#" id="tw_link">
									<img src="<?php echo base_url ('assets/img/noncol_twitter.png'); ?>" alt="Twitter" style="width:40px;margin-right:5px;" title="Twitter">
								</a>
							</th>
							<th>
								<a href="#" id="pn_link">
									<img src="<?php echo base_url ('assets/img/noncol_pinterest.png'); ?>" alt="Pinterest" style="width:40px;margin-right:5px;" title="Pinterest">
								</a>
							</th>
						</tr>
					</table>
<!-- 					<br>
					<h3>ABOUT US</h3>
					<p class="contactdetails">loremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p> -->
				</div>
				<div class=" col-lg-4 col-md-4 col-sm-12">
					<p style="font-size: 15px;margin-top:0px;">Let us know how we can solve your business problem.</p>
					<br>
					<!-- <p style="font-size:12px;font-style:italic;margin-bottom:0;">* required</p> -->
					<!-- <form action="#" class="footer-form"> -->
					<?php  echo form_open('planb_controller/send_message', ['class'=>'form-horizontal','id'=>'sendmessage']); ?>
					    <div class="form-group">
					      <!-- <label for="Name">Name:</label> -->
					      <input type="name" class="form-control" id="Name" placeholder="Name*" name="naveme">
					    </div>
					    <div class="form-group">
					      <!-- <label for="email">Email:</label> -->
					      <input type="email" class="form-control" id="email" placeholder="Email*" name="email">
					    </div>
					    <div class="form-group">
						  <!-- <label for="message">Comment:</label> -->
						  <textarea class="form-control" rows="4" id="message" placeholder="Message*"></textarea>
						</div>
					    <button type="submit" class="btn btn-primary btn-block">Send message</button>
					 <?php form_close();?>
				</div>

				<div class=" col-lg-4 col-md-4 col-sm-12">
					<h3 style="margin-top: 0;">Newsletter</h3>
					<p style="font-size:14px;font-style:italic;">Signup for our weekly newsletter and get the latest updates</p>
					<br>
					<form action="#" class="footer-form">
					    <div class="form-group">
					      <!-- <label for="email">Email:</label> -->
					      <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
					    </div>
					    <button type="submit" class="btn btn-primary">Submit</button>
					  </form>
				</div>
			</div>
			<br>
		</div>
			
		</div>
	</div>
	<a href="#" id="back-to-top" title="Back to top"><span class="glyphicon glyphicon-menu-up"></span></a>

<script type="text/javascript">
	$(window).scroll(function(){
		var wScroll = $(this).scrollTop();

		if(wScroll > $('.partners').offset().top - 300){
			$('.partners > .container > .row >.column').each(function(i){
				setTimeout(function(){
					$('.partners > .container > .row >.column').eq(i).addClass('toShow');}, 200 * (i + 1));
				});
		}
	

	});

	if ($('#back-to-top').length) {
	    var scrollTrigger = 100, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
		                $('#back-to-top').addClass('show');
	            } else {
	                $('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
	}
</script>
				
</body>
</html>