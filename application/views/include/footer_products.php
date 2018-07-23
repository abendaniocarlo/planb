

<div style="background-color:#063e47; height:200px;width:100%;margin:0px;display:table;">
	<div style="display: table-row;">
		<table style="margin: 50px auto 0px auto; ">
			<tr>
				<th>
					<a href="#" id="fb_link2">
						<img src="<?php echo base_url ('assets/img/noncol_fb.png'); ?>" alt="Facebook" style="width:40px;margin-right:5px;" title="Facebook">
					</a>
				</th>
				<th>
					<a href="#" id="in_link2">
						<img src="<?php echo base_url ('assets/img/noncol_linkedin.png'); ?>" alt="LinkedIn" style="width:40px;margin-right:5px;" title="LinkedIn">
					</a>
				</th>
				<th>
					<a href="#" id="gp_link2">
						<img src="<?php echo base_url ('assets/img/noncol_gplus.png'); ?>" alt="Google+" style="width:40px;margin-right:5px;" title="Google+">
					</a>
				</th>
				<th>
					<a href="#" id="tw_link2">
						<img src="<?php echo base_url ('assets/img/noncol_twitter.png'); ?>" alt="Twitter" style="width:40px;margin-right:5px;" title="Twitter">
					</a>
				</th>
				<th>
					<a href="#" id="pn_link2">
						<img src="<?php echo base_url ('assets/img/noncol_pinterest.png'); ?>" alt="Pinterest" style="width:40px;margin-right:5px;" title="Pinterest">
					</a>
				</th>
			</tr>
		</table>
	</div>
	<p style="text-align:center;vertical-align: middle;display:table-row;font-size:18px;color:white; font-family: Raleway; margin-top:0px;">
	Copyright &copy; 2018 PLAN B &#8226; All rights reserved</p>
</div>


<script type="text/javascript">
	$(document).ready(function(){
	     $("#fb_link2 > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/col_fb.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/noncol_fb.png');
                  });
                $(this).fadeIn(100);
              }
            );
	     $("#in_link2 > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/col_linkedin.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/noncol_linkedin.png');
                  });
                $(this).fadeIn(100);
              }
            );
	     $("#gp_link2 > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/col_gplus.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/noncol_gplus.png');
                  });
                $(this).fadeIn(100);
              }
            );
	     $("#tw_link2 > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/col_twitter.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/noncol_twitter.png');
                  });
                $(this).fadeIn(100);
              }
            );
	     $("#pn_link2 > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/col_pinterest.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", '../assets/img/noncol_pinterest.png');
                  });
                $(this).fadeIn(100);
              }
            );
	});
</script>