<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/bootstrap/css/bootstrap-theme.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/fonts.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/linearicons/style.css'); ?>">
</head>
<body>
	<script src="<?php echo base_url ('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url ('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
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
	<script type="text/javascript">
		$(document).ready(function(){ 
			$('.menu ul li a').click(function() { 
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
				&& location.hostname == this.hostname) { 
					var $target = $(this.hash); 
					$target = $target.length && $target 
					|| $('[name=' + this.hash.slice(1) +']'); 
					if ($target.length) { 
						var targetOffset = $target.offset().top; 
						$('html,body') 
						.animate({scrollTop: targetOffset}, 800); 
						return false; 
					} 
				} 
			}); 
		});
	</script>
</body>
</html>