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
	    <a href="<?php echo base_url('planb_controller/hardware'); ?>">Hardware</a>
	    <a href="<?php echo base_url('planb_controller/infra'); ?>">Infrastructure</a>
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
				WEB HOSTING
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
			<a href="" data-toggle="modal" data-target="#modalproduct" style="text-decoration: none;">
				<div class="boxmodal">
					<div class="round">
						<img src="<?php echo base_url('assets/img/product icons/webhosting.png');?>">
					</div>
					<p> WEB HOST</p>
				</div>
			</a>
		</div>

		<div class="col-md-3">
			<a href="" data-toggle="modal" data-target="#modalproduct" style="text-decoration: none;">
			<div class="boxmodal">
				<div class="round">
					<img src="<?php echo base_url('assets/img/product icons/webhosting.png');?>">
				</div>
				<p> WEB HOST</p>
			</div>
			</a>
		</div>

		<div class="col-md-3">
			<a href="" data-toggle="modal" data-target="#modalproduct" style="text-decoration: none;">
			<div class="boxmodal">
				<div class="round">
					<img src="<?php echo base_url('assets/img/product icons/webhosting.png');?>">
				</div>
				<p> WEB HOST</p>
			</div>
			</a>
		</div>

		<div class="col-md-3">
			<a href="" data-toggle="modal" data-target="#modalproduct" style="text-decoration: none;">
			<div class="boxmodal">
				<div class="round">
					<img src="<?php echo base_url('assets/img/product icons/webhosting.png');?>">
				</div>
				<p> WEB HOST</p>
			</div>
			</a>
		</div>

	</div>


	<!-- MODAL TO VIEW PRODUCT INFO -->
	<div class="modal fade" id="modalproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="vid">
		      	<!-- MODAL HEADER -->
		        <div class="modal-header productheader">
		          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
		          <h3 class="modal-title text-center">PRODUCT NAME</h3>
		        </div>
		        <!-- <video width="100%" height="100%" autoplay controls style="border-radius: 5px 5px 0px 0px;">
				  <source src="images/ABENDANIO (AMT Demo).mp4" type="video/mp4">
				</video> -->
				<iframe width="100%" height="450px" src="https://www.youtube.com/embed/uu6jSpgN4BA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	        </div>
	        <!-- MODAL BODY -->
	        <div class="modal-body" style="padding:30px;">
	        	<div class="row">
	        		<div class="col-md-6">
			         	<h3 style="margin-top:5px;"><b>PRODUCT INFORMATION</b></h3><br>
			         	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			         	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			         	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			         	consequat.</p>
			         	<br>
		         	</div>
	        		<div class="col-md-6">
	        			<div style="height:45px;width:100%;background-color:#E6E6E6;padding:5px;">
			         		<h4><b>Make a purchase:</b></h4>
			         	</div>
			         	<table class="tbl">
			         		<tr>
				         		<td><input type="checkbox" id="feature0" value="220.50" onclick="UpdateCost()"></td>
				         		<td> feature 1</td>
				         		<td>(Php 220.50)</td>
			         		</tr>
			         		<tr>
			         			<td><input type="checkbox" id="feature1" value="100.25" onclick="UpdateCost()"></td>
			         			<td> feature 2</td>
			         			<td>(Php 100.25)</td>
			         		</tr>
			         		<tr>
			         			<td><input type="checkbox" id="feature2" value="84.50" onclick="UpdateCost()"></td>
			         			<td> feature 3</td>
			         			<td>(Php 84.50)</td>
			         		</tr>
			         		<tr>
			         			<td><input type="checkbox" id="feature3" value="45.00" onclick="UpdateCost()"></td>
			         			<td> feature 4</td>
			         			<td>(Php 45.00)</td>
			         		</tr>
			         		<tr>
			         			<td><input type="checkbox" id="feature4" value="87.00" onclick="UpdateCost()"></td>
			         			<td> feature 5</td>
			         			<td>(Php 87.00)</td>
			         		</tr>
			         	</table>
			         	<!-- <div class="checkbox">
			         		<label><input type="checkbox" id="feature0" value="220.50" onclick="UpdateCost()"> feature 1 (Php 220.50)</label>
			         	</div>
			         	<div class="checkbox">
				         	<label><input type="checkbox" id="feature1" value="100.25" onclick="UpdateCost()"> feature 2 (Php 100.25)</label>
				        </div>
			         	<div class="checkbox">
				         	<label><input type="checkbox" id="feature2" value="84.50" onclick="UpdateCost()"> feature 3 (Php 84.50)</label>
				        </div>
			         	<div class="checkbox">
				         	<label><input type="checkbox" id="feature3" value="45.00" onclick="UpdateCost()"> feature 4 (Php 45.00)</label>
				        </div>
			         	<div class="checkbox">
				         	<label><input type="checkbox" id="feature4" value="87.00" onclick="UpdateCost()"> feature 5 (Php 87.00)</label>
				        </div> -->
			         	<br>
			         	<table style="width:100%;">
							<tr>
								<td><h4 style="margin:0;">Total:</h4></td>
								<td><input type="text" id="totalcost" value="" placeholder="0.00" disabled="disabled"></td>
							</tr>
<!-- 						<tr>
								<td><button type="reset" class="btn btn-danger btn-sm">Cancel</button></td>
								<td><button type="submit" class="btn btn-primary btn-sm">Purchase</button></td>
							</tr> -->
						</table>
		         	</div>
	         	</div>
	        </div>
	        <!-- MODAL FOOTER -->
	        <div class="modal-footer">
	        	<input type="submit" class="btn btn-warning" data-toggle="modal" data-target="#modalpurchase" value="Purchase">
	        	<button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	</div>	<!-- END OF MODAL TO VIEW PRODUCT INFO -->

	  <!-- MODAL FOR PURCHASE -->
	<div class="modal fade" id="modalpurchase" role="dialog" style="background-color: rgba(0,0,0,0.5);">
	    <div class="modal-dialog modal-md">
	      <div class="modal-content">
	        <div class="modal-header" style="background-color:#457167;border-radius: 5px 5px 0 0;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title"><b>PURCHASE THIS PRODUCT</b></h4>
	        </div>
	        <div class="modal-body" style="margin: 20px 0px;">
		        <div class="container-fluid" style="width:90%">
		          <form class="form-horizontal" action="#">

				    <div class="form-group">
				      <label class="control-label col-xs-4 col-sm-4 col-md-4" for="product_name">Product Name:</label>
				      <div class="col-xs-8 col-sm-8 col-md-8">
				        <input type="text" class="form-control" id="product_name" name="product_name" value="Product Name" disabled="disabled">
				      </div>
				    </div>

				    <div class="form-group">
				      <label class="control-label col-xs-4 col-sm-4 col-md-4" for="buyer_name">Enter Name:</label>
				      <div class="col-xs-8 col-sm-8 col-md-8">
				        <input type="text" class="form-control" id="buyer_name" name="buyer_name">
				      </div>
				    </div>

				    <div class="form-group">
				      <label class="control-label col-xs-4 col-sm-4 col-md-4" for="contact_num">Enter Contact No.:</label>
				      <div class="col-xs-8 col-sm-8 col-md-8">
				        <input type="text" class="form-control" id="contact_num" name="contact_num" maxlength="11">
				      </div>
				    </div>

				    <div class="form-group">
				      <label class="control-label col-xs-4 col-sm-4 col-md-4" for="buyer_email">Enter Email:</label>
				      <div class="col-xs-8 col-sm-8 col-md-8">
				        <input type="email" class="form-control" id="buyer_email" name="buyer_email">
				      </div>
				    </div>
				    <br>
				    <div class="form-group">
				      <label class=" col-xs-3 col-sm-3 col-md-3" for="">Features:</label>
				      <div class="col-xs-9 col-sm-9 col-md-9">
				        <table class="tbl2">
				        	<tr><td>Feature 2</td><td>//price</td></tr>
				        	<tr><td>Feature 4</td><td>//price</td></tr>
				        	<tr><td>Feature 5</td><td>//price</td></tr>
				        	<tr><td>Total price: </td><td><input type="text" id="totalcost2" value="" placeholder="0.00" disabled="disabled"></td></tr>
				        </table>
				      </div>
				    </div>
				    <br>
				    <div style="float:right;">
			          <input type="submit" class="btn btn-warning" value="Send">
			          <input type="reset" class="btn btn-default" data-dismiss="modal" value="Cancel">
			      </div>
				</form>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div><!-- END OF MODAL FOR PURCHASE -->



	<script type="text/javascript">
		function openNav() {
		    document.getElementById("myNav").style.height = "100%";
		}

		function closeNav() {
		    document.getElementById("myNav").style.height = "0%";
		}


		  $('.tbl tr').click(function(){
		        $(this).find('input:checkbox').each(function() {
		            if(this.checked) this.checked = false; // toggle the checkbox
		            else this.checked = true; 

		            UpdateCost();
		        })
		    });

		// for checkbox sum auto compute
		function UpdateCost() {
		  var sum = 0;
		  var gn, elem;
		  for (i=0; i<5; i++) {
		    gn = "feature"+i;
		    elem = document.getElementById(gn);
		    if (elem.checked == true) { sum += Number(elem.value); }
		  }
		  document.getElementById("totalcost").value = sum.toFixed(2);
		  document.getElementById("totalcost2").value = sum.toFixed(2);
		} 
	</script>
</body>
</html>