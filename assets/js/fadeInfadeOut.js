$(document).ready(function(){
	     $("#fb_link > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/col_fb.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/noncol_fb.png');
                  });
                $(this).fadeIn(100);
              }
            );
	     $("#in_link > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/col_linkedin.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/noncol_linkedin.png');
                  });
                $(this).fadeIn(100);
              }
            );
	     $("#gp_link > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/col_gplus.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/noncol_gplus.png');
                  });
                $(this).fadeIn(100);
              }
            );
	     $("#tw_link > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/col_twitter.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/noncol_twitter.png');
                  });
                $(this).fadeIn(100);
              }
            );
	     $("#pn_link > img").hover(
              function () {
                  $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/col_pinterest.png');
                  });
                $(this).fadeIn(100);
              }, 
              function () {
                $(this).fadeOut(100,function(){
                     $(this).attr("src", './assets/img/noncol_pinterest.png');
                  });
                $(this).fadeIn(100);
              }
            );
	});