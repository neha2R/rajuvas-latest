<?php wp_footer(); ?>
<style>
#newsletterwidget-2{
	float:left;
	width:25%;
	background:url(images/divider.jpg) no-repeat right top;
	padding: 0px 0px 0px 40px;
}
@media screen and (max-width: 1572px) and (min-width: 1300px){
#social-widget-2 {
    width: 14%;
}
}
</style>
  <div id="footer" class="row wow fadeInUp animated">
                <div class="main-container">
                	
                    <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
      
        			<?php dynamic_sidebar( 'footer-widget-area' ); ?>
    
     				 <?php endif; ?>
                     <div id="footer-bottom">
                     <p class="copyright">&copy; 2015- All Rights Reserved to rajuvas.org</p>
                     <p class="copyright company"><a href="http://neologicx.com" target="_blank" style="color:#fff;">Powered By Neologicx Resources India Pvt. Ltd.</a></p>
  <?php if ( is_active_sidebar( 'bottom-widget-area' ) ) : ?>
      
        			<?php dynamic_sidebar( 'bottom-widget-area' ); ?>
    
     				 <?php endif; ?>
                     <div class="clear-fix"></div>
                     </div>
                
                </div>
                 <div class="clear-fix"></div>
                </div>
      
    
   </div>
   
  
 <script src="<?php  echo bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
  
  <script>
    jQuery(function () {
      jQuery("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
  
      <script>
       jQuery(document).ready(function ($) {

       jQuery('#tabs').tabulous();
	   	

});
      </script>
      
      <script>
      jQuery(document).ready(function(){
    jQuery('#tabs li').click(function() {
        jQuery(this).siblings('li').removeClass('active');
       jQuery(this).addClass('active');
    });
});
      
      </script>
      

<script src="<?php  echo bloginfo('template_url');?>/js/vallenato.js"></script>
<script> 
jQuery(document).ready(function(){
 jQuery("#magnifier").click(function(){
   jQuery("#search-box-panel").slideToggle(150);
  });
 
});
</script> 
 <script>

   $count = 0;
  function count($type) {
    if($type == 'plus'){
      $count += 1;      
    }else if($type == 'minus'){
      $count -= 1;
    }
    return $count;
  }

$(function() {
  $(".increase").click(function() {
    if($count<3){
            $("div, div *").children().each(function() {
          var size = parseInt($(this).css("font-size"));
          size = size + 1 + "px";
          $(this).css({
            'font-size': size
          });
        });
        count('plus');     
    }        
  });
  return false;
});
$(function() {
  $(".decrease").click(function() {
    if($count>-3){
    $("div, div *").children().each(function() {
      var size = parseInt($(this).css("font-size"));
      size = size - 1 + "px";
      $(this).css({
        'font-size': size
      });
    });
    count('minus');
  }
  });
  return false;
});

</script>

<script>
    function Refresh() {
        window.parent.location = window.parent.location.href;
    }
</script>
      
     <script src="<?php  echo bloginfo('template_url');?>/js/tabulous.js"></script>
      <script>
       $(document).ready(function ($) {
       $('#tabs').tabulous();
	   	

});
      </script>
      <script src="<?php  echo bloginfo('template_url');?>/js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
        
        <script>
		$("#search-box-panel").click(function(e){ e.stopPropagation(); });
		$("body").click(function(e){
			if(e.target.id=="magnifier")
			{
			return false;
			}
			
			if($("#search-box-panel").is(":visible"))
			{
				$("#search-box-panel").slideUp(150);
			}
			
			});
			
			
			$(".mega-menu-item-has-children > a").click(function(e){ e.preventDefault(); });
		</script>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-875932-49', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>